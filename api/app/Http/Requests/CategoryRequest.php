<?php

namespace App\Http\Requests;

use App\Http\Resources\BaseResource;
use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class CategoryRequest extends FormRequest
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

        // Check for delete route first
        if ($this->isMethod('post') && $this->routeIs('categories.delete')) {
            $rules = [
                'id' => 'required|integer|exists:categories,id',
            ];
        } elseif ($this->isMethod('post') || $this->isMethod('put') || $this->isMethod('patch')) {
            $data = $this->all();

            if (isset($data['id']) && is_numeric($data['id'])) {
                $rules['id'] = 'required|integer|exists:categories,id';
            } else {
                $rules['id'] = 'nullable|string';
            }
            $rules["title"] = 'required|string|max:255';
            $rules["slug"] = 'nullable|string|max:255';
            $rules["type"] = 'required|string';

        }

        return $rules;
    }

    public function list(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return BaseResource::collection(Category::where('type', 'post')->get());
    }

    public function store(): \Illuminate\Http\JsonResponse
    {
        $validated = $this->validated();
        $categoryID = $validated['id'];
        $title = $validated['title'];
        $slug = $validated['slug'] ?? Str::slug($title); // Generate a slug if not provided.
        $type = $validated['type'];

        // Check if we are dealing with a new category or updating an existing one.
        if ($categoryID && is_numeric($categoryID)) {
            // Update an existing category.
            $category = Category::find($categoryID);
            if (!$category) {
                // If the category doesn't exist, return a 404 response.
                return response()->json(['message' => 'Category not found.'], 404);
            }
            $category->update([
                'title' => $title,
                'slug' => $slug,
                'type' => $type,
            ]);
        } else if (!$categoryID || !is_numeric($categoryID)) {
            // Create a new category. Ignore non-numeric IDs for new categories.
            $category = Category::create([
                'title' => $title,
                'slug' => $slug,
                'type' => $type,
            ]);
        }

        return response()->json(['message' => 'Category saved successfully.', 'ok' => true], 200);
    }

    public function deleteCategory(): \Illuminate\Http\JsonResponse
    {
        $validated = $this->validated();
        $id = $validated['id'];

        if($id){
            Category::where('id', $id)->delete();
            return response()->json(['message' => 'Category deleted successfully.', 'ok' => true]);
        }

        return response()->json(['message' => 'Something goes wrong!', 'ok' => false], 200);
    }

    public function events($cat = false)
    {
        // Check if a category is provided
        if ($cat) {
            // Add the category to the response
            $selectedCategories = Category::where('type', $cat)->get();
            if ($selectedCategories) {
                // Add the selected category to the response
                return BaseResource::collection($selectedCategories);
            } else {
                // Handle the case where the provided category is not valid
                return response()->json(['message' => 'Something goes wrong!']);
            }
        } else {
            $event_cats = Category::where('type', '!=', 'post')->get();
            // If no category is provided, return only the categories
            return BaseResource::collection($event_cats)->groupBy('type')->sortBy('id');
        }
    }
}
