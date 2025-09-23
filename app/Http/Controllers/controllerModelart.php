<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class controllerModelart extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Modelart::all();
        return view('exibirObras', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novaObra');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = $request->file('imagemObra')->store('imagens', 'public');
        $dados = new Modelart();
        $dados->nomeObra = $request->input('nomeObra');
        $dados->artistaObra = $request->input('artistaObra');
        $dados->tipoObra = $request->input('tipoObra');
        $dados->estiloObra = $request->input('estiloObra');
        $dados->imagemObra = $path;
        $dados->dataObra = $request->input('dataObra');
        $dados->save();
        return redirect('/obras')->with('success', 'Nova obra cadastrada com sucesso.');
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
        $dados = Modelart::find($id);
        if(isset($dados)){
            return view('editarObra', compact('dados'))->with('success', 'Nova obra editada com sucesso.');
        }
        return redirect('/obras')->with('danger', 'Erro ao tentar editar obra.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Modelart::find($id);
        if(isset($dados)){
            $dados->nomeObra = $request->input('nomeObra');
            $dados->artistaObra = $request->input('artistaObra');
            $dados->tipoObra = $request->input('tipoObra');
            $dados->estiloObra = $request->input('estiloObra');
            $dados->imagemObra = $request->input('imagemObra');
            $dados->dataObra = $request->input('dataObra');
            $dados->save();
            return redirect('/obras')->with('success', 'Nova obra atualizada com sucesso.');
        }
        return redirect('/obras')->with('danger', 'Erro ao tentar atualizar obra.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $dados = Modelart::find($id);
        if(isset($dados)){
            $imagemObra = $dados->imagemObra;
            Storage::disk('public')->delete($imagemObra);
            $dados->delete();
            return redirect('/obras')->with('success', 'Obra deletada com sucesso.');
        }
        return redirect('/obras')->with('danger', 'Erro ao tentar deletar obra.');
    }

    public function pesquisarObra(){
        return view('pesquisarObra');
    }

    public function procurarObra(Request $request){
        $nome = $request->input('nomeObra');
        $dados = DB::table('modelarts')->select('id', 'nomeObra', 'artistaObra', 'tipoObra', 'estiloObra', 'imagemObra', 'dataObra')
                 ->where(DB::raw('lower(nomeObra)'), 'like', '%' . strtolower($nome) . '%')->get();
        return view('exibirObras', compact('dados'));
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
