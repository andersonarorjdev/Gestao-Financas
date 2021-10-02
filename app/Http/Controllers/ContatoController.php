<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        return view('frontend.contato');
    }   

    public function metodoContato($metodo){
        return "O método utilizado foi: $metodo";
    }
}
