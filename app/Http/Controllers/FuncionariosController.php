<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function index(Request $request){
        return view("funcionarios.index");
    }

    public function create(){
        return view("funcionarios.create");
    }
}
