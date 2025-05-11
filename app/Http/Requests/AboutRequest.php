<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'title_ar' => 'required|string|max:255|required_without:title_en',
            'title_en' => 'required|string|max:255|required_without:title_ar',
            'description_ar' => 'required|string|required_without:description_en',
            'description_en' => 'required|string|required_without:description_ar',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ];
    }
}
