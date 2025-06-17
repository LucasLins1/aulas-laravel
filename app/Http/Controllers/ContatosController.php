<?php

namespace App\Http\Controllers;

use App\Models\Contatos;
use Illuminate\Http\Request;

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
}
