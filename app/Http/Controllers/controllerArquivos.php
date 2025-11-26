<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;
use App\Models\Arquivos;

class controllerArquivos extends Controller
{
    public function store(Request $request)
    {   
        $tipoArq = $request->input('tipoArq');
        if ($tipoArq == 'A'){
            $path = $request->file('arquivo')->store('aulas', 'public');
        }

        elseif ($tipoArq == 'E'){
            $path = $request->file('arquivo')->store('exercicios', 'public');
        }

        elseif ($tipoArq == 'C'){
            $path = $request->file('arquivo')->store('complementar', 'public');
            
        }

        elseif ($tipoArq == 'R'){
            $path = $request->file('arquivo')->store('resolucoes', 'public');
        }
        
        $post = new Arquivos();
        $post->tituloArq = $request->input('tituloArq');
        $post->arquivo = $path;
        $post->aula_id = $request->input('aula_id');
        $post->tipoArq = $tipoArq;
        $post->save();
        return redirect('/arquivos');
    }

    public function create(string $id)
    {
        $dados = Aula::find($id);
        return view('inserirArquivo', compact('dados'));
       //dd($dados);
    }

    public function destroy($id)
    {
        $post = Arquivo::find($id);
        if (isset($post)) {
            $arquivo = $post->arquivo;
            Storage::disk('public')->delete($arquivo);
            $post->delete();
        }
        return redirect('/arquivos');
    }

    public function download($id)
    {
        $post = Arquivo::find($id);
        if (isset($post)) {
            return Storage::disk('public')->download($post->arquivo);
        } else {
            return redirect('/arquivos');
        }
    }
}
