<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class Editrequest extends FormRequest
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
        //dd($this->id);
        return [
            'name'=>'required|unique:categories,name,'.$this->id,
            'status'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Name không được trống',
            'name.unique'=>"$this->name đã tồn tại",

         
        ];
    }
}
