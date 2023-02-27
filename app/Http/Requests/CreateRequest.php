<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name'      => 'string|required|max:100',
            'lastname'  => 'required|max:100',
            'address'   => 'max:250',
            'phone'     => 'max:25',
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => 'Name is required provide it please',
            'prenom.required'  => 'LastName is required provide it please',
            'name.max'         => 'name maximum caracters 100',
            'lastname.max'     => 'Lastname maximum caracters 100',
            'address.max'      => 'Address maximum caracters 250',
            'phone.max'        => 'Phone maximum caracters 25',
        ];
    }
}
