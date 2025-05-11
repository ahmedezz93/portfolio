<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqsRequest extends FormRequest
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
            'question_ar' => 'nullable|string|max:255|required_without:question_en',
            'question_en' => 'nullable|string|max:255|required',
            'answer_ar' => 'nullable|string|required_without:answer_en',
            'answer_en' => 'nullable|string|required_without:answer_ar',

        ];
    }
}
