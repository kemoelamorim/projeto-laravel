<?php

namespace App\Http\Controllers;
use App\Models\Squad;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SquadsController extends Controller
{
    public function index(Request $request){
        $squads = Squad::all();
        return view("squads.index")->with('squads', $squads);
    }

    public function create(){
        return view("squads.create");
    }

    public function edit($id){

        $squad = Squad::find($id);
        return view("squads.edit")->with('squad', $squad);;
    }

    public function update(Request $request, $id){

        $nomeSquad = $request->input('nome');
        $responsavelSquad = $request->input('responsavel');
        $descricaoSquad = $request->input('descricao');

        DB::select("update squads set nome=?, responsavel=?, descricao =? where id = ?", [$nomeSquad, $responsavelSquad, $descricaoSquad, $id]);

        return redirect('/squads');
    }

    public function destroy($id){
        Squad::destroy($id);
        return redirect('/squads');
    }

    public function story(Request $request){
       $nomeSquad = $request->input('nome');
       $responsavelSquad = $request->input('responsavel');
       $descricaoSquad = $request->input('descricao');

       $squad = new Squad();
       $squad->nome = $nomeSquad;
       $squad->responsavel = $responsavelSquad;
       $squad->descricao = $descricaoSquad;
       $squad->save();

       return redirect('/squads');
    }
}
