<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
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
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'header_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'footer_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',

            'description' => 'nullable|string',
            'location_ar' => 'nullable|string',
            'location_en' => 'nullable|string',
            'facebook_link' => 'nullable',
            'twitter_link' => 'nullable',
            'telegram_link' => 'nullable',
            'linkedin_link' => 'nullable',
            'youtube_link' => 'nullable',
            'primary_color' => 'nullable|string',
            'secondary_color' => 'nullable|string',
            'background_color' => 'nullable|string',
        ];
    }
}
