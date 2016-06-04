<?php

namespace estoque\Http\Controllers;

use Request;
use Validator;
use estoque\Models\FormularioModel;

class FormularioController extends Controller {

    public function create() {
        return view("formulario.create");
    }

    public function storage() {
        $validator = Validator::make(
            Request::all(), [
                'nome' => 'required|between:3,255|alpha',
                'email' => 'required|email|between:3,80|unique:formulario',
                'preferencia_musical' => 'required',
                'sexo' => 'required',
                'senha' => 'required|between:3,8|alpha_dash',
                'confirmacao_senha' => 'same:senha'
            ]
        );

        if ($validator->fails()) {
            return redirect('/formulario/create')->withErrors($validator)->withInput();
        } else {
            FormularioModel::create(Request::all());
            
        }
    }
    
    public function createRedirect()
    {
        return view("formulario.errorsredirect");
    }

}
