<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployeeRequest extends FormRequest
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
            'document'=> 'required',
             'name'=> 'required',
             'number'=> 'required',
             'phone'=> 'required',
             'email'=> 'required',
             'address'=> 'required',
             'neighborhood'=> 'required',
             'departament'=> 'required',

             'post'=> 'required',
             'salary'=> 'required',
              'eps'=> 'required',
              'arl'=> 'required',
              'box'=> 'required',
              'heart'=> 'required',
              'datebegin'=> 'required',
              'dateretirement'=> 'required',

              'namecontact'=> 'required',
               'relationship'=> 'required',
               'numbercontact'=> 'required',
        ];

        return "datos no validados";
    }
}
