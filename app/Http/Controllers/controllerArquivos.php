<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerArquivos extends Controller
{
    public function store(Request $request)
    {   
        $post->tipo = $request->input('tipoArq');

        if ($post->tipo == 'A'){
            $path = $request->file('arquivo')->store('aulas', 'public');
        }

        elseif ($post->tipo == 'E'){
            $path = $request->file('arquivo')->store('exercicios', 'public');
        }

        elseif ($post->tipo == 'C'){
            $path = $request->file('arquivo')->store('certificados', 'public');
        }

        else{
            $path = $request->file('arquivo')->store('complementar', 'public');
        }
        
        $post = new Arquivo();
        $post->titulo = $request->input('tituloArq');
        $post->descricao = $request->input('descricaoArq');
        $post->data = $request->input('dataArq');
        $post->arquivo = $path;
        $post->save();
        return redirect('/');
    }

    public function destroy($id)
    {
        $post = Arquivo::find($id);
        if (isset($post)) {
            $arquivo = $post->arquivo;
            Storage::disk('public')->delete($arquivo);
            $post->delete();
        }
        return redirect('/');
    }

    public function download($id)
    {
        $post = Arquivo::find($id);
        if (isset($post)) {
            return Storage::disk('public')->download($post->arquivo);
        } else {
            return redirect('/');
        }
    }
}
