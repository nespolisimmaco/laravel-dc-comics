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
            'price'=>'required|min:4|max:10',
            'series'=>'required|min:3|max:50',
            'sale_date'=>'required',
            'type'=>'required|min:3|max:50',
        ];
    }
}
