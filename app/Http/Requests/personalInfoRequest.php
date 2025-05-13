<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class personalInfoRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'mini_description' => 'required|string|max:1000',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'nationality' => 'required|string|max:255',
            'freelance' => 'required|in:yes,no',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'spoken_languages' => 'required|string|max:255',
            'linkedin' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'freelance.required' => 'The freelance status field is required.',
            'freelance.in' => 'The freelance status must be either Yes or No.',
            'email.email' => 'Please enter a valid email address.',
            'linkedin.url' => 'Please enter a valid LinkedIn URL.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'image.max' => 'The image may not be greater than 2MB.',
            'cv.mimes' => 'The CV must be a file of type: pdf, doc, docx.',
            'cv.max' => 'The CV may not be greater than 5MB.',
        ];
    }
}
