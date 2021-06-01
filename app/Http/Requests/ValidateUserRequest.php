<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'city' => 'required',
            'address' => 'required',
            'state' => 'required',
            'mobile_number' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => "Ime je obavezno polje",
            'email.required' => "Email je obavezno polje",
            'city.required' => "Grad je obavezno polje",
            'address.required' => "Ulica i broj je obavezno polje",
            'state.required' => "Država je obavezno polje",
            'mobile_number.required' => "Broj telefona je obavezno polje",
        ];
    }
}
