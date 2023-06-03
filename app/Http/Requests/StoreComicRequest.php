<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title'=>'required|min:4|max:100',
            'description'=>'nullable',
            'image'=>'required',
            'price'=>'required|min:3|max:10',
            'series'=>'required|min:3|max:50',
            'sale_date'=>'required',
            'type'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Attenzione! Inserire un titolo',
            'title.min'=>'Il titolo deve essere lungo almeno :min caratteri',
            'image.required'=>'Attenzione! Inserire un\'immagine',
            'price.required'=>'Attenzione! Inserire un prezzo',
            'price.min'=>'Il prezzo deve essere lungo almeno :min caratteri',
            'series.required'=>'Attenzione! Inserire una serie',
            'series.min'=>'La serie deve essere lunga almeno :min caratteri',
            'sale_date.required'=>'Attenzione! Inserire una data di vendita',
            'type.required'=>'Attenzione! Inserire un tipo'
        ];
    }
}
