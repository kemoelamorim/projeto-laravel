<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Funcionario;

use Illuminate\Support\Facades\DB;


class FuncionariosController extends Controller
{
    public function index(Request $request){
        $funcionarios = Funcionario::all();
        return view("funcionarios.index")->with('funcionarios', $funcionarios);
    }

    public function create(){
        return view("funcionarios.create");
    }

    public function edit($id){

        $funcionario = Funcionario::find($id);
        return view("funcionarios.edit")->with('funcionario', $funcionario);;
    }

    public function update(Request $request, $id){

        $nomeFuncionario = $request->input('nome');
        $cpfFuncionario = $request->input('cpf');
        $valorHoraFuncionario = $request->input('valorHora');
        $funcaoFuncionario = $request->input('funcao');

        DB::select("update funcionarios set nome=?, cpf=?, valorHora =?, funcao=? where id = ?", [$nomeFuncionario, $cpfFuncionario, $valorHoraFuncionario, $funcaoFuncionario, $id]);

        return redirect('/funcionarios');
    }

    public function destroy($id){
        Funcionario::destroy($id);
        return redirect('/funcionarios');
    }

    public function story(Request $request){
        $nomeFuncionario = $request->input('nome');
        $cpfFuncionario = $request->input('cpf');
        $valorHoraFuncionario = $request->input('valorHora');
        $funcaoFuncionario = $request->input('funcao');

        $funcionario = new Funcionario();
        $funcionario->nome = $nomeFuncionario;
        $funcionario->cpf = $cpfFuncionario;
        $funcionario->valorHora = $valorHoraFuncionario;
        $funcionario->funcao = $funcaoFuncionario;
        $funcionario->save();

       return redirect('/funcionarios');
    }
}
