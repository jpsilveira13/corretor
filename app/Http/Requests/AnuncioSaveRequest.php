<?php

namespace lucianocorretor\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnuncioSaveRequest extends FormRequest
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

            'categoria_imovel_id' => 'required',
            'estado_id' => 'required',
            'cidade_id' => 'required',
            'imagem_capa' => 'image|max:1024'

        ];
    }

    public function messages()
    {
        return [
            'categoria_imovel_id.required' => 'A categoria é requerida',
            'estado_id.required' => 'O estado é requerido',
            'cidade_id.required' => 'A cidade é requerida',
            'nro_quartos.required' => 'O nome do bairro  é requerido',
            'imagem_capa.imagem' => 'Só é permitido imagens',
            'imagem_capa.max' => 'Máximo da tamanho da imagem é de 1024',


        ];
    }

}
