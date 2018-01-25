<?php

namespace lucianocorretor\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveEstadoRequest extends FormRequest
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
            'nome' => 'required',
            'uf' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome do estado  é requerido',
            'uf.required' => 'A sigla é requerida',

        ];
    }

}
