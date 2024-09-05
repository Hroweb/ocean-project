<?php

namespace App\Http\Requests;

use App\Http\Resources\BaseResource;
use App\Models\Event;
use App\Models\Testimonial;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class TestimonialsRequest extends FormRequest
{
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

        // Determine the action based on the route or other criteria
        if ($this->isMethod('post') || $this->isMethod('put') || $this->isMethod('patch')) {
            $rules["id"] = 'sometimes|integer|exists:testimonials,id';
            $rules["name"] = 'required|string|max:255';
            $rules["designation"] = 'required|string|max:255';
            $rules["description"] = 'required|string';
            $rules["logo_alt"] = 'required|string';

            // Check if the id is present to conditionally apply the 'required' rule
            $rules["logo_src"] = $this->input('id') ? 'sometimes|file|mimes:jpg,jpeg,png,svg|max:2048' : 'required|file|mimes:jpg,jpeg,png,svg|max:2048';
            $rules["avatar"] = $this->input('id') ? 'sometimes|file|mimes:jpg,jpeg,png,svg|max:2048' : 'required|file|mimes:jpg,jpeg,png,svg|max:2048';
        } /*elseif ($this->isMethod('delete')) {
            $rules = [
                'id' => 'required|integer|exists:testimonials,id',
            ];
        }*/ elseif ($this->isMethod('post') && $this->routeIs('attach')) {
            $rules = [
                'testimonial' => 'required|integer|exists:testimonials,id',
                'case' => 'required|integer|exists:events,id',
            ];
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            '*.id.required' => 'The testimonial ID is required for existing testimonials.',
            '*.id.exists' => 'The testimonial ID must exist in the testimonials table.',
            '*.name.required' => 'The name is required.',
            '*.designation.required' => 'The designation is required.',
            '*.description.required' => 'The description is required.',
            '*.logo_alt.required' => 'The logo_alt is required.',
            '*.logo_src.required' => 'The logo_src is required.',
            '*.avatar.required' => 'The avatar is required.',
            '*.testimonial.required' => 'The testimonial ID is required.',
            '*.testimonial.exists' => 'The testimonial ID must exist in the testimonials table.',
            '*.case.required' => 'The case ID is required.',
            '*.case.exists' => 'The case ID must exist in the events table.',
        ];
    }

    public function getTestimonials(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $num = $this->input('rand');
        if($num && (is_numeric($num) || (int)$num > 0)){
            $testimonials = Testimonial::inRandomOrder()->take((int)$num)->get();
        }else{
            $testimonials = Testimonial::orderBy('id', 'DESC')->get();
        }

        return BaseResource::collection($testimonials);
    }

    public function getOne($id): \Illuminate\Http\JsonResponse|BaseResource
    {
        $testimonial = Testimonial::where('id', $id)->first();
        if( !$testimonial ){
            return Response::json(['error' => 'Testimonial not found!'], 404);
        }

        return new BaseResource($testimonial);
    }

    public function storeTestimonials(): \Illuminate\Http\JsonResponse
    {
        $requestData = $this->validated();
        $id = $this->input('id');
        $name = $this->input('name');
        $slug = Str::slug($name);
        $designation = $this->input('designation') ?? null;
        $description = $this->input('description') ?? null;
        $logo_alt = $this->input('logo_alt') ?? null;
        $logo_srcPath = null;
        $avatarPath = null;
        $redirect = true;

        if ($this->hasFile('logo_src')) {
            $logo_src = $this->file("logo_src");
            $fileName = $logo_src->getClientOriginalName();
            $filePath = public_path('/uploads/testimonials/');
            $logo_src->move($filePath, $fileName);
            $logo_srcPath = $fileName;
        }

        if ($this->hasFile('avatar')) {
            $avatar = $this->file("avatar");
            $fileName = $avatar->getClientOriginalName();
            $filePath = public_path('/uploads/testimonials/');
            $avatar->move($filePath, $fileName);
            $avatarPath = $fileName;
        }

        $dataToUpdateOrCreate = [
            'name' => $name,
            'slug' => $slug,
            'designation' => $designation,
            'description' => $description,
            'logo_alt' => $logo_alt,
        ];

        if ($logo_srcPath) {
            $dataToUpdateOrCreate['logo_src'] = $logo_srcPath;
        }

        if ($avatarPath) {
            $dataToUpdateOrCreate['avatar'] = $avatarPath;
        }

        if ($id) {
            // Update existing testimonial
            $testimonial = Testimonial::find($id);
            if (!$testimonial) {
                return response()->json(['message' => 'Testimonial not found.'], 404);
            }
            $testimonial->update($dataToUpdateOrCreate);
            $redirect = false;
        } else {
            // Insert new testimonial
            $testimonial = Testimonial::create($dataToUpdateOrCreate);
        }

        return response()->json(['message' => 'Testimonial saved successfully.', 'ok' => true, 'redirect' => $redirect]);
    }

    public function delete(): \Illuminate\Http\JsonResponse
    {
        $id = $this->route('id');

        // Create a new array that includes the id from the route
        $data = array_merge($this->all(), ['id' => $id]);

        // Manually validate the id
        $validator = \Validator::make($data, [
            'id' => 'required|integer|exists:testimonials,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        Testimonial::where('id', $id)->delete();

        return response()->json(['message' => 'Testimonial has been removed', 'ok' => true], 200);
    }

    public function attachToEvent(): \Illuminate\Http\JsonResponse
    {
        $validated = $this->validated();
        $testimonialId = $validated['testimonial'];
        $caseId = $validated['case'];

        $case = Event::findOrFail($caseId);
        $case->testimonials()->syncWithoutDetaching($testimonialId);

        return response()->json(['message' => 'Testimonial attached successfully!', 'ok' => true], 200);
    }
}
