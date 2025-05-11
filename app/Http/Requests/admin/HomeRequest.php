<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
            'first_zone_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'second_zone_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',

            'first_zone_title_ar' => 'nullable|string|max:255',
            'first_zone_title_en' => 'nullable|string|max:255',
            'first_zone_description_ar' => 'nullable|string|max:1000',
            'first_zone_description_en' => 'nullable|string|max:1000',

            'second_zone_title_ar' => 'nullable|string|max:255',
            'second_zone_title_en' => 'nullable|string|max:255',
            'second_zone_mini_description_ar' => 'nullable|string|max:1000',
            'second_zone_mini_description_en' => 'nullable|string|max:1000',
            'second_zone_item_1_description_ar' => 'nullable|string|max:1000',
            'second_zone_item_1_description_en' => 'nullable|string|max:1000',
            'second_zone_item_2_description_ar' => 'nullable|string|max:1000',
            'second_zone_item_2_description_en' => 'nullable|string|max:1000',
            'second_zone_item_3_description_ar' => 'nullable|string|max:1000',
            'second_zone_item_3_description_en' => 'nullable|string|max:1000',

            'third_zone_title_item_one' => 'nullable|numeric',
            'third_zone_mini_description_item_one_ar' => 'nullable|string|max:1000',
            'third_zone_mini_description_item_one_en' => 'nullable|string|max:1000',

            'third_zone_title_item_two' => 'nullable|numeric',
            'third_zone_mini_description_item_two_ar' => 'nullable|string|max:1000',
            'third_zone_mini_description_item_two_en' => 'nullable|string|max:1000',

            'third_zone_title_item_three' => 'nullable|numeric',
            'third_zone_mini_description_item_three_ar' => 'nullable|string|max:1000',
            'third_zone_mini_description_item_three_en' => 'nullable|string|max:1000',

            'third_zone_title_item_four' => 'nullable|numeric',
            'third_zone_mini_description_item_four_ar' => 'nullable|string|max:1000',
            'third_zone_mini_description_item_four_en' => 'nullable|string|max:1000',

        ];
    }

}
