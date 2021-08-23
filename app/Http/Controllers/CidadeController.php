<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;
use App\Http\Requests\CidadeRequest;
class CidadeController extends Controller
{
    public function cidades()
    {
        $subtitulo  = 'Lista de cursos';

        $cidades = Cidade::all();

        return view('admin.cidades.index', compact('subtitulo', 'cidades'));
    }
    public function formAdicionar()
    {
        $action = route('admin.cidades.form');
        return view('admin.cidades.form', compact('action'));
    }

    public function formSave(CidadeRequest $request) 
    {
        
            $cidade = new Cidade();
            $cidade->nome = $request->nome;
            $cidade->valor = $request->valor;
            $cidade->data = $request->data;

        $cidade->save();
        return redirect()->route('admin.cidades.listar');

    }

    public function deletar($id, Request $request){
        Cidade::destroy($id);
        $request->session()->flash('sucesso',"Curso deletado");
        return redirect()->route('admin.cidades.listar');
    }

    public function formEditar($id){
        $cursos = Cidade::find($id);
        $action = route('admin.cidades.editar', $cursos->id);
        return view('admin.cidades.form', compact('cursos', 'action'));
    }

    public function editar(CidadeRequest $request, $id){
        $cursos = Cidade::find($id);
        $cursos->nome = $request->nome;
        $cursos->valor = $request->valor;
        $cursos->data = $request->data;
        $cursos->save();

        $request->session()->flash('sucesso', "$request->nome alterado com sucesso!");
        return redirect()->route('admin.cidades.listar');
    }

    
}
