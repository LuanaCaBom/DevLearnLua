<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class controllerCurso extends Controller
{
    private $cursos;
    public function __construct(Curso $cursos){
        $this->middleware('auth');
        $this->cursos = $cursos;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Curso::all();
        return view('exibirCursos', compact('dados'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoCurso');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Curso();
        $dados->nomeCurso = $request->input('nomeCurso');
        $dados->cargaHoraria = $request->input('cargaHoraria');
        $dados->descricao = $request->input('descricao');
        $dados->valor = $request->input('valor');
        $dados->recomendacoes = $request->input('recomendacoes');
        $dados->save();
        return redirect('/cursos')->with('success', 'Novo curso cadastrado com sucesso.');
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
        $dados = Curso::find($id);
        if(isset($dados)){
            return view('editarCurso', compact('dados'))->with('success', 'Novo curso editado com sucesso.');
        }
        return redirect('/cursos')->with('danger', 'Erro ao tentar editar curso.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Curso::find($id);
        if(isset($dados)){
            $dados->nomeCurso = $request->input('nomeCurso');
            $dados->cargaHoraria = $request->input('cargaHoraria');
            $dados->descricao = $request->input('descricao');
            $dados->valor = $request->input('valor');
            $dados->recomendacoes = $request->input('recomendacoes');
            $dados->save();
            return redirect('/cursos')->with('success', 'Curso atualizado com sucesso.');
        }
        return redirect('/cursos')->with('danger', 'Erro ao tentar atualizar curso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Curso::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/cursos')->with('success', 'Curso deletado com sucesso.');
        }
        return redirect('/cursos')->with('danger', 'Erro ao tentar deletar curso.');
    }

    public function pesquisarCurso(){
        return view('pesquisarCurso');
    }

    public function procurarCurso(Request $request){
        $nome = $request->input('nomeCurso');
        $dados = DB::table('cursos')->select('id', 'nomeCurso', 'cargaHoraria', 'descricao', 'valor', 'recomendacoes', 'arquivos', 'aulas')
                 ->where(DB::raw('lower(nomeCurso)'), 'like', '%' . strtolower($nome) . '%')->get();
        return view('exibirCursos', compact('dados'));
    }

    public function download($id)
    {
        $dados = Modelart::find($id);
        if(isset($dados)){
            return Storage::disk('public')->download($dados->imagemObra)->with('success', 'Imagem baixada com sucesso.');;
        }else{
            return redirect('/obras')->with('danger', 'Erro ao tentar baixar.');
        }
    }
}
