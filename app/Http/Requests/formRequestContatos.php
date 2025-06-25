<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formRequestContatos extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        //Inicializar o array de regras
        $request = [];
        
        //Verifica se o metodo é POST ou PUT
        if ($this->method() == 'POST' || $this->method() == 'PUT') {
            $request = [
                'nome' => 'required'
            ];
        }

        //Retorna o array das regras (seja vazio ou com regras)
        return $request;
        
    }
}
