<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandPost extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nameBrand' =>'required|max:100',
            'image' =>'required|mimes:jpeg,bmp,png,jpg'
        ];
    }

    public function messages()
    {
        return[
            'nameBrand.required' =>'Ten Thuong hieu khong duoc de trong',
            'nameBrand.max' =>'Ten thuong hieu khong duoc qua :max ky tu',
            'image.required' =>'Logo Thuong hieu khong duoc de trong',
            'image.mimes' =>'Dinh dang logo anh la jpeg,bmp,png,jpg'
        ];
    }
}
