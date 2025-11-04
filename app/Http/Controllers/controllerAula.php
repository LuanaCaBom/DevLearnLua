<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class controllerAula extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Aula::all();
        return view('exibirAulas', compact('dados'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novaAula');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Aula();
        $dados->nomeAula = $request->input('nomeAula');
        $dados->dataAula = $request->input('dataAula');
        $dados->descricaoAula = $request->input('descricaoAula');
        $dados->statusAula = $request->input('statusAula');
        $dados->curso_id = $request->input('');
        $dados->save();
        return redirect('/aulas')->with('success', 'Nova aula cadastrada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dados = Aula::find($id);
        if(isset($dados)){
            return view('editarAula', compact('dados'))->with('success', 'Aula editada com sucesso.');
        }
        return redirect('/aulas')->with('danger', 'Erro ao tentar editar aula.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Aula::find($id);
        if(isset($dados)){
            $dados->nomeAula = $request->input('nomeAulas');
            $dados->dataAula = $request->input('dataAula');
            $dados->descricaoAula = $request->input('descricaoAula');
            $dados->statusAula = $request->input('statusAula');
            $dados->save();
            return redirect('/aulas')->with('success', 'Aula atualizada com sucesso.');
        }
        return redirect('/aulas')->with('danger', 'Erro ao tentar atualizar aula.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Aula::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/aulas')->with('success', 'Aula deletada com sucesso.');
        }
        return redirect('/aulas')->with('danger', 'Erro ao tentar deletar aula.');
    }

    public function pesquisarAula(){
       view('pesquisarAula');
    }

    public function procurarAula(Request $request){
        $nome = $request->input('nomeAula');
        $dados = DB::table('aulas')->select('id', 'nomeAula', 'dataAula', 'descricaoAula', 'statusAula')
                 ->where(DB::raw('lower(nomeAula)'), 'like', '%' . strtolower($nome) . '%')->get();
        return view('exibirCursos', compact('dados'));
    }
}
