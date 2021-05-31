<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateNewAdRequest extends FormRequest
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
            'kategorija' => 'required|not_in:0',
            'naziv' => 'required',
            'stanje' => 'required',
            'opis' => 'required',
            'slike' => 'required',
            'cena' => 'required',
            'pravila' => 'required_without_all'
        ];
    }

    public function messages()
    {
        return [
            'kategorija.required' => "Kategorija je obavezno polje",
            'naziv.required' => "Naziv je obavezno polje",
            'stanje.required' => "Stanje je obavezno polje",
            'opis.required' => "Opis je obavezno polje",
            'slike.required' => "Slike su obavezno polje",
            'cena.required' => "Cena je obavezno polje",
            'pravila.required' => "Pravila su obavezno polje"
        ];
    }
}
