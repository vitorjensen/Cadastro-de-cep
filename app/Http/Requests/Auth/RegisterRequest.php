<?php

namespace App\Http\Requests\Auth;

use GuzzleHttp\Psr7\Message;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;


class RegisterRequest extends FormRequest
{
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
           'cep' => ['required', 'size:8', 'unique:clientes,cep'],
           'rua' => 'required',
           'cidade' => 'required',
        ];
    }
    public function attributes()
    {
        return [
            'cep' => 'CEP',
            'rua' => 'Rua',
            'cidade' => 'Cidade',
       
        ];
    }
   
}
