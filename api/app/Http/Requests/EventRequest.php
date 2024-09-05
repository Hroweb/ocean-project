<?php

namespace App\Http\Requests;

use App\Helpers\Helper;
use App\Http\Resources\EventResource;
use App\Models\Event;
use App\Models\EventGallery;
use App\Models\EventTemplate;
use App\Models\EventThumbs;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class EventRequest extends FormRequest
{
    protected array $templateFields = [
        'Template1' => ['case-block-title', 'case-block-text', 'case-block-img'],
        'Template2' => ['case-block-gif'],
        'Template3' => ['case-bl-img-1', 'case-bl-img-2', 'case-block-2col-title', 'case-block-2col-text'],
        'Template4' => ['case-col-img-1', 'case-col-img-2', 'case-block-2colm-title', 'case-block-2colm-title2', 'case-block-2col-text', 'case-block-2col-text2'],
        'Template5' => ['case-block-f-img'],
        'Template6' => ['case-2col-img-1', 'case-2col-img-2'],
        'Template7' => ['case-block-alt-img', 'case-block-alt-text', 'case-block-alt-title', 'case-block-alt-text'],
    ];

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [];
        if ($this->isMethod('post') || $this->isMethod('put') || $this->isMethod('patch')){
            $isNewCase = !$this->input('id') || $this->input('id') === 'false';
            $rules = [
                'title' => 'required|string|max:255',
                'desc' => 'required|string',
                'overview' => 'required|string',
                'meta_description' => 'required|string',
                'meta_keywords' => 'required|string',
                'bannerColor' => 'required|string',
                'featured' => 'required|boolean',
                'sizes' => 'required|string',
                'years' => 'required|string',
                'events' => 'required|string',
                'services' => 'required|string',
            ];
            if ($isNewCase) {
                $rules['banner'] = 'required|image|max:10240'; // 10MB max size
//                $rules['gallery'] = 'required';
                $rules['thumbs'] = 'required';
            } else {
                $rules['banner'] = 'nullable|image|max:10240'; // 10MB max size
                $rules['gallery'] = 'nullable';
                $rules['thumbs'] = 'nullable';
            }
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The title field is required.',
            'desc.required' => 'The description field is required.',
            'overview.required' => 'The overview field is required.',
            'meta_description.required' => 'The meta description field is required.',
            'meta_keywords.required' => 'The meta keywords field is required.',
            'bannerColor.required' => 'The banner color field is required.',
            'featured.required' => 'The featured field is required.',
            'sizes.required' => 'The sizes field is required.',
            'years.required' => 'The years field is required.',
            'events.required' => 'The events field is required.',
            'services.required' => 'The services field is required.',
            'banner.required' => 'The banner field is required.',
            'banner.image' => 'The banner must be an image.',
            'banner.max' => 'The banner may not be greater than 10MB.',
            'gallery.required' => 'The gallery field is required.',
            'thumbs.required' => 'The thumbs field is required.',
        ];
    }

    public function getEvents(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $perPage = $this->route('per_page') ?? false;
        $orderBy = $this->input('orderBy', 'desc');

        if ($perPage) {
            $events = Event::with(['categories', 'thumbs'])->orderBy('id', $orderBy)->paginate($perPage);
        } else {
            $events = Event::with(['categories', 'thumbs'])->orderBy('id', $orderBy)->get();
        }
        return EventResource::collection($events);
    }

    public function getEventById(): \Illuminate\Http\JsonResponse|EventResource
    {
        $id = $this->route('id');
        $event = Event::with([
            'categories',
            'testimonials',
            'gallery',
            'thumbs',
            'templates',
            'services' => function($query) {
                $query->select('id', 'title')->orderBy('id', 'ASC');
            }
        ])
            ->where(is_numeric($id) ? 'id' : 'slug', $id)
            ->first();

        if($event){
            return new EventResource($event);
        }
        return Response::json(['error' => 'Event not found!'], 404);
    }

    public function removeEvent(): \Illuminate\Http\JsonResponse
    {
        $id = $this->route('id');

        // Create a new array that includes the id from the route
        $data = array_merge($this->all(), ['id' => $id]);

        // Manually validate the id
        $validator = \Validator::make($data, [
            'id' => 'required|integer|exists:events,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $item = Event::find($id);
        if ($item) {
            if (!$item->delete()) {
                return response()->json(['message' => 'Something went wrong'], 422);
            }
            $folderPath = public_path("/uploads/portfolio/projects/{$id}/"); // Construct the path to the directory.

            // Delete the directory using a helper function
            Helper::deleteDirectory($folderPath);
            return response()->json(['message' => 'The case deleted successfully', 'ok' => true]);
        } else {
            return response()->json(['message' => 'The case not found'], 404);
        }
    }

    public function storeEvent()
    {
        //return response()->json(['a' => $this->all()]);
        //dd($this->all());
        $isNewCase = !$this->has('id');
        $templates = $this->input('templates')['templateFields'] ?? false;
        $caseEvents = $this->events ? array_map('intval', array_unique(array_merge([5], explode(',', $this->events)))) : [];
        $caseYears = $this->years ? array_map('intval', array_unique(explode(',', $this->years))) : [];
        $caseSizes = $this->sizes ? array_map('intval', array_unique(explode(',', $this->sizes))) : [];
        $caseServices = $this->services ? array_map('intval', array_unique(explode(',', $this->services))) : [];
        $caseTestimonial = $this->testimonials ? array_map('intval', array_unique(explode(',', $this->testimonials))) : [];

        $event = Event::firstOrNew(['id' => $this->input('id')]);
        $args = $this->except(['id', 'banner']);
        $args['slug'] = Str::slug($this->input('title'), '-');
        $date = Carbon::now();

        if ($isNewCase) {
            $args['created_at'] = $date;
        }
        $args['updated_at'] = $date;
        $event->fill($args)->save();

        if (!empty($caseEvents) && !empty($caseSizes) && !empty($caseYears)) {
            $caseCats = array_merge($caseYears, $caseSizes, $caseEvents);
            $event->categories()->sync($caseCats);
        }

        if (!empty($caseTestimonial)) {
            $event->testimonials()->sync($caseTestimonial);
        }
        if (!empty($caseServices)) {
            $event->services()->sync($caseServices);
        }

        // Handle the banner file upload
        if ($this->hasFile('banner')) {
            $banner = $this->file('banner');
            $bannerName = $banner->getClientOriginalName();
            $bannerPath = public_path("/uploads/portfolio/projects/{$event->id}");
            if (!is_dir($bannerPath)) {
                mkdir($bannerPath, 0755, true);
            }

            $banner->move($bannerPath, $bannerName);
            $event->image = "/projects/{$event->id}/" . $bannerName;
            $event->save();
        }

        // Handle event gallery uploads
        $gallery = $this->file('gallery');
        if ($gallery && count($gallery) > 0) {
            $photosData = $this->eventGallery($gallery, $event->id, $event->title);
            foreach ($photosData as $data) {
                $event->gallery()->create($data);
            }
        }

        // Handle event thumbnails uploads
        $thumbs = $this->file('thumbs');
        if ($thumbs && count($thumbs) > 0) {
            $photosData = $this->eventGallery($thumbs, $event->id, $event->title, 'thumbs');
            foreach ($photosData as $data) {
                $event->thumbs()->create($data);
            }
        }

        if ($templates) {
            $data = $this->storeTemplateData($event->id, $this);
            if (array_key_exists('errors', $data)) {
                return response()->json(['errors' => $data['errors']], 422);
            }
        }

        return response()->json(['ok' => true, 'message' => 'The case created/updated successfully', 'event' => $event], 200);
    }

    protected function storeTemplateData($eventID, $request)
    {
        $errors = [];
        $data = $request->all();

        foreach ($data['templates']['templateFields'] as $index => $template) {
            foreach ($template as $templateName => $templateData) {
                $uuid = $templateData['case-block-id'];

                if (array_key_exists($templateName, $this->templateFields)) {
                    $fields = $this->templateFields[$templateName];
                    $rules = $this->buildValidationRules($fields);
                    $validator = \Validator::make($templateData, $rules);

                    if ($validator->fails()) {
                        $errors[$templateName] = $validator->errors()->all();
                        continue;
                    }

                    foreach ($fields as $field) {
                        if (str_contains($field, 'img') || str_contains($field, 'gif')) {
                            $file = $request->file('templates.templateFields.' . $uuid . '.' . $templateName . '.' . $field);
                            if ($file) {
                                $filePath = public_path("/uploads/portfolio/projects/{$eventID}/templates/");
                                $fileName = $file->getClientOriginalName();
                                $templateData[$field] = "/projects/{$eventID}/templates/{$fileName}";
                                $file->move($filePath, $fileName);
                            }
                        }
                    }

                    if ($uuid) {
                        $tmp = EventTemplate::where('uuid', $uuid)->first();
                        if ($tmp) {
                            $existingData = json_decode($tmp->data, true);
                            $updatedData = array_merge($existingData, $templateData);

                            $tmp->data = json_encode($updatedData);
                            $tmp->save();
                        } else {
                            EventTemplate::create([
                                'event_id' => $eventID,
                                'type' => $templateName,
                                'uuid' => $uuid,
                                'data' => json_encode($templateData)
                            ]);
                        }
                    } else {
                        $errors[$templateName] = ['uuid' => 'Incorrect uuid!'];
                    }
                }
            }
        }

        return $errors ? ['errors' => $errors] : ['success' => true];
    }

    protected function buildValidationRules(array $fields): array
    {
        $rules = [];
        foreach ($fields as $field) {
            if (str_contains($field, 'img') || str_contains($field, 'gif')) {
                $rules[$field] = 'file|image|max:2048';  // Assume all img and gif fields are files
            } else {
                $rules[$field] = 'required|string';
            }
        }
        return $rules;
    }

    protected function eventGallery($images, $eventID, $title, $type=false): array
    {
        $data = [];
        $imageType = $type ?? 'gallery';
        if ($images && count($images) > 0) {
            foreach ($images as $index => $fileArray) {
                if (isset($fileArray['file']) && $fileArray['file']->isValid()) {
                    $file = $fileArray['file'];
                    $fileName = strtolower($file->getClientOriginalName());
                    $filePath = public_path("/uploads/portfolio/projects/{$eventID}/{$imageType}/");

                    $file->move($filePath, $fileName);

                    $data[] = [
                        'src' => "/projects/{$eventID}/{$imageType}/{$fileName}",
                        'alt' => $title,
                    ];
                }
            }
        }
        return $data;
    }

    public function deletePhoto($type, $eventID, $photoID): \Illuminate\Http\JsonResponse
    {
        if (!$type || !$photoID || !$eventID) {
            return response()->json(['message' => 'Missing required ID.'], 422);
        }

        $image = $type === 'thumbs' ? EventThumbs::find($photoID) : EventGallery::find($photoID);

        if ($image) {
            $filePath = public_path("/uploads/portfolio/{$image->src}");

            if (file_exists($filePath)) {
                unlink($filePath);
            }

            $image->delete();
            return response()->json(['message' => 'Photo deleted successfully.', 'ok' => true], 200);
        } else {
            return response()->json(['message' => 'Photo not found.'], 404);
        }
    }

    public function deleteTemplate($id): \Illuminate\Http\JsonResponse
    {
        $template = EventTemplate::where('uuid', $id)->first();
        if($template){
            $eventID = $template->event_id;
            $imageFields = $this->detectImageFields(json_decode($template->data));
            if($imageFields && count($imageFields) > 0) {
                foreach ($imageFields as $imageField) {
                    $filePath = public_path("/uploads/portfolio/{$imageField}");

                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
            }

            $template->delete();
            return response()->json(['message' => 'Template deleted successfully.', 'ok' => true], 200);
        }
        return response()->json(['message' => 'Template not found.'], 404);
    }

    public function detectImageFields($data): array
    {
        $imageFields = [];
        $keywords = ['img', 'gif'];

        foreach ($data as $key => $value) {
            foreach ($keywords as $keyword) {
                if (stripos($key, $keyword) !== false) {
                    $imageFields[$key] = $value;
                    break;
                }
            }
        }

        return $imageFields;
    }
}
