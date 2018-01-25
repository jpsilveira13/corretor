<?php

namespace lucianocorretor\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveCidadeRequest extends FormRequest
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
            'estado_id' => 'required',
            'nome' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'estado_id.required' => 'O estado é requerido',
            'nome.required' => 'O nome da cidade  é requerido',


        ];
    }

}
