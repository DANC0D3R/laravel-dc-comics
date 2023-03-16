<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title'=>'required|min:3|max:255',
            'description'=>'required|min:5',
            'price'=>'required',
            'series'=>'required|min:3|max:255',
            'type'=>'required|min:3|max:255',
            'sale_date'=>'required|date_format:Y-m-d'
        ];
    }

    public function messages(){
        return[
        'title.required'=>'Il titolo è obbligatorio',
        'title.min'=>'Il titolo deve contenere almeno 3 caratteri',
        'title.max'=>'Il titolo può contenere al massimo 255 caratteri',
        'description.required'=>'La descrizione è obbligatoria',
        'description.min'=>'Il titolo deve contenere almeno 5 caratteri',
        'price.required'=>'Prezzo obbligatorio',
        'series.required'=>'Indicare la serie',
        'series.min'=>'La serie deve contenere almeno 3 caratteri',
        'series.max'=>'La serie può contenere al massimo 255 caratteri',
        'type.required'=>'Indicare il tipo',
        'type.min'=>'Il tipo deve contenere almeno 3 caratteri',
        'type.max'=>'Il tipo può contenere al massimo 255 caratteri',
        'sale_date.required'=>'La data è obbligatoria',
        'sale_date.date_format:Y-m-d'=>'La data deve essere indicata nel formato AAAA-MM-GG'
        ];
    }
}