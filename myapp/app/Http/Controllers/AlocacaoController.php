<?php

namespace App\Http\Controllers;
use App\Membro;
use App\Projeto;
use App\Cargo;

use Illuminate\Http\Request;

class AlocacaoController extends Controller
{
    public function painel(){
    	$membros = Membro::all();
    	$projetos = Projeto::all();

    	return view('lista-proj-mem', compact('membros', 'projetos'));
    }

    public function viewAlocacao(){
    	$membros = Membro::all();
    	$projetos = Projeto::all();

    	return view('form-alocacao', ['membros'=> $membros, 'projetos'=>$projetos]);
    }

    public function salvarAlocacao(Request $request) {

    	$nome = explode(' ', $request->membro);

    	$membro = Membro::where('nome', $nome[0])
    				->where('sobrenome', $nome[1])
    				->first();
    	
    	$projeto = Projeto::where('nome_projeto', 'LIKE', '%'.$request->projeto.'%')->first();


        $membro->projetos()->attach($projeto->id, ['data_alocacao' => $request->data]);

    	return redirect()->route('lista');
    }

    public function viewEdicao($id) {
    	$membro = Membro::where('id', $id)->first();

    	$cargos = Cargo::all();

    	return view('form-editar-membro', compact('membro', 'cargos'));
    }

    public function salvarEdicao(Request $request) {
    	
    	$cargo = Cargo::where('nome_cargo', $request->cargo)->first();

    	
    	$membro = Membro::where('id', '=', $request->id)->first();

    	$membro->nome = $request->nome;
    	$membro->sobrenome = $request->sobrenome;
    	$membro->id_cargo = $cargo->id;

    	$membro->save();

    	return redirect()->route('lista');
    }

     public function deletarMembro($id){

    	$membro = Membro::where('id', $id)->first();

    	$membro->delete();

    	return redirect()->back();
    }
}
