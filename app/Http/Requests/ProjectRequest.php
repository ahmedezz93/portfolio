<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_ar' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'description_ar' => 'nullable|string',
            'description_en' => 'nullable|string',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'client_ar' => 'nullable|string|max:255',
            'client_en' => 'nullable|string|max:255',
            'category_ar' => 'nullable|string|max:255',
            'category_en' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'location_ar' => 'nullable|string|max:255',
            'location_en' => 'nullable|string|max:255',


            ];
    }
}
