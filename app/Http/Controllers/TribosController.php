<?php

namespace App\Http\Controllers;

use App\Models\Tribo;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TribosController extends Controller
{
    public function index(Request $request){
        $tribos = Tribo::all();
        return view("tribos.index")->with('tribos', $tribos);
    }

    public function create(){
        return view("tribos.create");
    }

    public function edit($id){

        $tribo = Tribo::find($id);
        return view("tribos.edit")->with('tribo', $tribo);;
    }

    public function update(Request $request, $id){

        $nomeTribo = $request->input('nome');
        $responsavelTribo = $request->input('responsavel');
        $descricaoTribo = $request->input('descricao');

        DB::select("update tribos set nome=?, responsavel=?, descricao =? where id = ?", [$nomeTribo, $responsavelTribo, $descricaoTribo, $id]);

        return redirect('/tribos');
    }

    public function destroy($id){
        Tribo::destroy($id);
        return redirect('/tribos');
    }

    public function story(Request $request){
       $nomeTribo = $request->input('nome');
       $responsavelTribo = $request->input('responsavel');
       $descricaoTribo = $request->input('descricao');

       $tribo = new Tribo();
       $tribo->nome = $nomeTribo;
       $tribo->responsavel = $responsavelTribo;
       $tribo->descricao = $descricaoTribo;
       $tribo->save();

       return redirect('/tribos');
    }
}
