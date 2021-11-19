<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
        return view('frontend.index');

        //We have 3 ways to join information to a view. 
        //1 Associative array, that looks like: ['varInView' => $varInControleer];
        //The first is the most used.

        //2 compact that looks like: compact('varA', 'varB');
        //In the view, varA and varB will be variables.

        //3 with() method. can be returned in a function view();
        //Ex: return view('viewName')->with('variableViewName', 'variableControllerNamer');
    }
}
