<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            'nome' => 'required|max:30',
            'descricao' => 'required|max:100',
            'quantidade' => 'required',
            'preco' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nome.required' => 'O valor do campo não pode ser vazio',
            'nome.max' => 'A quantidade de caracteres não pode ser maior que 30',
            'descricao.required' => 'O valor do campo não pode ser vazio',
            'descricao.max' => 'A quantidade de caracteres não pode ser maior que 100',
            'quantidade.required' => 'O valor do campo não pode ser vazio',
            'preco.required' => 'O valor do campo não pode ser vazio',
        ];
    }
}
