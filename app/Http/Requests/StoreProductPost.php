<?php

namespace App\Http\Requests;

use http\Env\Request;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductPost extends FormRequest
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
            'brandProduct'=> 'required',
            'nameProduct' =>'required|unique:products,name|max:100',
            'priceProduct' =>'required|numeric',
            'qtyProduct' =>'required|numeric',
        ];
    }

    public function messages()
    {
        return[
            'brandProduct.required' =>'Tên thương hiệu không được để trống',
            'nameProduct.required' =>'Tên sản phẩm không được để trống',
            'nameProduct.unique' =>'    Tên sản phẩm đã tồn tại',
            'nameProduct.max' =>'Tên sản phẩm không được quá :max ký tự',
            'priceProduct.required' =>'Giá sản phẩm không được để trống',
            'priceProduct.numeric' =>'Giá trị của giá sản phẩm phải là số',
            'qtyProduct.required' =>'Số lượng sản phẩm không được để trống',
            'qtyProduct.numeric' =>'Giá trị của số lượng sản phẩm phải là số',
        ];
    }
}
