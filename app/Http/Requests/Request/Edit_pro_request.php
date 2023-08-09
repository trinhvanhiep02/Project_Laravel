<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class Edit_pro_request extends FormRequest
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
            'name'=> 'required | unique:products,name,'.$this->id
        ];
    }

    public function messages()
  
    {
        return[
            'name.required'=> 'không được để trống',
            'name.unique' => 'tên này đã tồn tại'

        ];
    }
}
