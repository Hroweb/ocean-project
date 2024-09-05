<?php

namespace App\Http\Requests;

use App\Http\Resources\BaseResource;
use App\Models\Team;
use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
        if ($this->isMethod('post') || $this->isMethod('put') || $this->isMethod('patch')) {
            return [
                'teamMembers' => 'required|array',
                'teamMembers.*.id' => 'required|exists:team,id',
                'teamMembers.*.name' => 'required|string|max:255',
                'teamMembers.*.position' => 'required|string|max:255',
                'teamMembers.*.bio' => 'required|string',
                'teamMembers.*.photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ];
        }

        return [];
    }

    public function getTeamMembers(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return BaseResource::collection(Team::all());
    }

    public function updateTeamMembers(): bool
    {
        $teamMembers = $this->input('teamMembers', []);
        $status = true;

        foreach ($teamMembers as $index => $teamData) {
            $item = Team::find($teamData['id']);
            if ($item) {
                $item->name = $teamData['name'];
                $item->position = $teamData['position'];
                $item->bio = $teamData['bio'];
                $item->updated_at = now();

                if ($this->hasFile("teamMembers.{$index}.photo")) {
                    $photo = $this->file("teamMembers.{$index}.photo");
                    $fileName = $photo->getClientOriginalName();
                    $filePath = public_path('/uploads/team/');
                    $photo->move($filePath, $fileName);
                    $item->photo = $fileName;
                }

                $update = $item->save();
                if (!$update) {
                    $status = false;
                }
            }
        }

        return $status;
    }
}
