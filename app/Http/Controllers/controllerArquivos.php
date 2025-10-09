<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerArquivos extends Controller
{
    public function store(Request $request)
    {
        $path = $request->file('arquivo')->store('arquivos', 'public');
        $post = new Arquivo();
        $post->titulo = $request->input('titulo');
        $post->descricao = $request->input('descricao');
        $post->data = $request->input('data');
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
