<?php

namespace App\Http\Requests;

use App\Helpers\Helper;
use App\Http\Resources\BaseResource;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class PostRequest extends FormRequest
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

        if ($this->isMethod('post') || $this->isMethod('put') || $this->isMethod('patch')) {
            $rules = [
                'title' => 'required|string|max:255',
                'categories' => 'nullable|string',
                'banner' => 'nullable|image|max:10240',
                'date' => 'required|date',
            ];
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The title is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'categories.string' => 'The categories must be a string.',
            'banner.image' => 'The banner must be an image.',
            'banner.max' => 'The banner may not be greater than 10MB.',
            'date.required' => 'The date is required.',
            'date.date' => 'The date must be a valid date.',
            'id.required' => 'The post ID is required.',
            'id.integer' => 'The post ID must be an integer.',
            'id.exists' => 'The post ID must exist in the posts table.',
        ];
    }

    public function getPosts(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $per_page = (int)$this['per_page'] ?? 10;
        return BaseResource::collection(Post::with('categories')->orderBy('id', 'desc')->paginate($per_page));
    }

    public function getPostById(): \Illuminate\Http\JsonResponse|BaseResource
    {
        $id = $this->route('id');
        $post = Post::with('categories')->where(is_numeric($id) ? 'id' : 'slug', $id)->first();

        if ($post) {
            return new BaseResource($post);
        } else {
            return Response::json(['error' => 'Post not found!'], 404);
        }
    }

    public function createOrUpdate(): \Illuminate\Http\JsonResponse
    {
        $validated = $this->validated();

        // Use firstOrNew instead of firstOrFail for handling both insert and update
        $post = Post::firstOrNew(['id' => $this->input('id')]);

        // Prepare the data excluding categories and files
        $args = $this->except(['id', 'categories', 'banner']);
        $args['slug'] = Str::slug($this->input('title'), '-');
        $date = Carbon::parse($args['date']);

        $args['created_at'] = $date;
        $args['updated_at'] = $date;

        // Handle categories
        if ($this->filled('categories')) {
            $catIDs = explode(',', $this->input('categories'));
            if (!in_array(1, $catIDs)) {
                $catIDs[] = 1; // Add category ID 1 to the array
            }
        }

        // Update or create the post
        $post->fill($args)->save();

        // Now that the post is saved, you can sync the categories if needed
        if (isset($catIDs)) {
            $post->categories()->sync($catIDs);
        }

        // Handle the banner file upload
        if ($this->hasFile('banner')) {
            $banner = $this->file('banner');
            $bannerName = pathinfo($banner->getClientOriginalName(), PATHINFO_FILENAME);
            $bannerPath = public_path("/uploads/blog/{$post->id}/");

            // Save the original webp image
            $bannerWebpName = $bannerName . '.webp';
            $banner->move($bannerPath, $bannerWebpName);
            $post->image = $bannerWebpName; // Assuming 'image' is the column name in your database
            $post->save();

            // Create new manager instance with desired driver
            $manager = new ImageManager(Driver::class);

            // Reading the webp image
            $image = $manager->read($bannerPath . $bannerWebpName);

            // Encoding to jpg data
            $encodedJpg = $image->toJpeg(90);
            $bannerJpgName = $bannerName . '.jpg';

            // Save the jpg image
            file_put_contents($bannerPath . $bannerJpgName, $encodedJpg);
        }

        return response()->json(['message' => 'Post saved successfully.', 'ok' => true], 200);
    }

    public function deletePost(): \Illuminate\Http\JsonResponse
    {
        $id = $this->route('id');

        // Create a new array that includes the id from the route
        $data = array_merge($this->all(), ['id' => $id]);

        // Manually validate the id
        $validator = \Validator::make($data, [
            'id' => 'required|integer|exists:posts,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $post = Post::find($id);

        if ($post) {
            $post->delete();
            $folderPath = public_path("/uploads/blog/{$id}/"); // Construct the path to the directory.

            // Delete the directory using a helper function
            Helper::deleteDirectory($folderPath);
            return response()->json(['message' => 'Post deleted successfully.', 'ok' => true], 200);
        } else {
            return response()->json(['message' => 'Post not found.'], 404);
        }
    }
}
