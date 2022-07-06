<?php

namespace App\Http\Controllers;

use App\Models\Area;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AreasController extends Controller
{
    public function index(Request $request){
        $areas = Area::all();
        return view("areas.index")->with('areas', $areas);
    }

    public function create(){
        return view("areas.create");
    }

    public function edit($id){

        $area = Area::find($id);
        return view("areas.edit")->with('area', $area);;
    }

    public function update(Request $request, $id){

        $nomeArea = $request->input('nome');
        $responsavelArea = $request->input('responsavel');
        $descricaoArea = $request->input('descricao');

        DB::select("update areas set nome=?, responsavel=?, descricao =? where id = ?", [$nomeArea, $responsavelArea, $descricaoArea, $id]);

        return redirect('/areas');
    }

    public function destroy($id){
        Area::destroy($id);
        return redirect('/areas');
    }

    public function story(Request $request){
       $nomeArea = $request->input('nome');
       $responsavelArea = $request->input('responsavel');
       $descricaoArea = $request->input('descricao');

       $area = new Area();
       $area->nome = $nomeArea;
       $area->responsavel = $responsavelArea;
       $area->descricao = $descricaoArea;
       $area->save();

       return redirect('/areas');
    }
}
