<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamsRequest extends FormRequest
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
            'name_ar' => 'nullable|string|max:255|required_without:name_en',
            'name_en' => 'nullable|string|max:255|required_without:name_ar',
            'email' => 'nullable|email|unique:teams,email,'. $this->id,
            'phone' => 'nullable|string|max:20',
            'experience' => 'nullable|numeric',
            'details_ar' => 'nullable|string',
            'details_en' => 'nullable|string',
            'job_title_ar' => 'nullable|string|max:255|required_without:job_title_en',
            'job_title_en' => 'nullable|string|max:255|required_without:job_title_ar',
            'facebook_link' => 'nullable',
            'twitter_link' => 'nullable',
            'instagram_link' => 'nullable',
            'linkdin_link' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ];
    }
}
