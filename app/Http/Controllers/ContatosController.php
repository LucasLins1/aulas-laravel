<?php

namespace App\Http\Controllers;

use App\Models\Contatos;
use Illuminate\Http\Request;

// Importa arquivo de validação
use App\Http\Requests\formRequestContatos;

class ContatosController extends Controller
{
    public function index(){
        $findContatos = Contatos::get();
 
        return view('pages.contatos.index', compact('findContatos'));
    }
   
    public function delete($idUser){
        $buscaRegistro = Contatos::find($idUser);
        $buscaRegistro->delete();

        return back();
    }
    
    public function create(FormRequestContatos $request) {

        //condicional para entendimento de envio dos dados para o banco de dados
        if($request->method() == "POST") {
            $data = $request->all();
            Contatos::create($data);
            
            return redirect('/contatos');
        }

        return view('pages.contatos.create');
    }
}
