<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'address'   => 'string|max:250',
            'phone'     => 'string|max:25',
        ];
    }

    public function messages()
    {
        return [
            'address.max'  => 'Address maximum caracters 250',
            'phone.max'    => 'Phone maximum caracters 25',
        ];
    }
}
