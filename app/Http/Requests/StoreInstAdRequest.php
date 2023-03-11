<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInstAdRequest extends FormRequest
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
            'title' =>'required|min:3|max:90',
            'image1' =>'required|mimes:jpeg,png,jpg|max:1700',
            'image2' =>'mimes:jpeg,png,jpg|max:1700',
            'image3' =>'mimes:jpeg,png,jpg|max:1700',
            'text' =>'required|min:30',
            'price' =>'required|regex:/^\d+(\.\d{1,2})?$/',
            'category_id' =>'required',
            'inst_condition' =>'required',
            'country_id' =>'required',
            // 'phone' =>'numeric',      
        ];
    }
}
