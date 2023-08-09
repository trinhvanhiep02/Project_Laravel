<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class Add_pro_request extends FormRequest
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
      //  dd('áđasadá');
        return [
            'name'=> 'required|unique:products',
            'price' => 'required',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=> 'Không được để trống',
            'price.required' => 'Không được để trống',
            'description.required' => 'Không được để trống'
        ];
    }
    
}
