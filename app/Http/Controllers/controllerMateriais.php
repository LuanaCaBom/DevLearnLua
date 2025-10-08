<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerMateriais extends Controller
{
    public function store(Request $request)
    {
        $path1 = $request->file('arquivo1')->store('aulas', 'public');
        $path2 = $request->file('arquivo2')->store('exercicios', 'public');
        $path3 = $request->file('arquivo3')->store('exemplos', 'public');
        $path4 = $request->file('arquivo4')->store('pdf', 'public');
        $post = new Material();
        $post->titulo = $request->input('titulo');
        $post->descricao = $request->input('descricao');
        $post->data = $request->input('data');
        $post->arquivo1 = $path1;
        $post->arquivo2 = $path2;
        $post->arquivo3 = $path3;
        $post->arquivo4 = $path4;
        $post->save();
        return redirect('/');
    }

    public function destroy($id)
    {
        $post = Material::find($id);
        if (isset($post)) {
            $arquivo1 = $post->arquivo1;
            $arquivo2 = $post->arquivo2;
            $arquivo3 = $post->arquivo3;
            $arquivo4 = $post->arquivo4;
            Storage::disk('public')->delete($arquivo1, $arquivo2, $arquivo3, $arquivo4);
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
