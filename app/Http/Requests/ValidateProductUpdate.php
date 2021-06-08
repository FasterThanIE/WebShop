<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateProductUpdate extends FormRequest
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
            'name' => 'required|not_in:0',
            'category' => 'required',
            'condition' => 'required',
            'description' => 'required',
            'price' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Kategorija je obavezno polje",
            'category.required' => "Naziv je obavezno polje",
            'condition.required' => "Stanje je obavezno polje",
            'description.required' => "Opis je obavezno polje",
//            'slike.required' => "Slike su obavezno polje",
            'price.required' => "Cena je obavezno polje",
        ];
    }
}
