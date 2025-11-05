<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerCurso;
use App\Http\Controllers\controllerAula;

Route::get('/', function () {
    return view('index');
})->name('inicio')->middleware('auth');

Route::get('/cursos', [controllerCurso::class, 'index'])->name('indexCursos');
Route::get('/cursos/novo', [controllerCurso::class, 'create'])->name('novoCurso');
Route::post('/cursos', [controllerCurso::class, 'store'])->name('gravaNovoCurso');
Route::get('/cursos/apagar/{id}', [controllerCurso::class, 'destroy'])->name('deletaCurso');
Route::get('/cursos/editar/{id}', [controllerCurso::class, 'edit'])->name('editaCurso');
Route::post('/cursos/{id}', [controllerCurso::class, 'update'])->name('atualizaCurso');
Route::get('/cursos/pesquisar', [controllerCurso::class, 'pesquisarCurso'])->name('pesquisarCurso');
Route::get('/cursos/procurar', [controllerCurso::class, 'procurarCurso'])->name('procurarCurso');

Route::get('/aulas', [controllerAula::class, 'index'])->name('indexAulas');
Route::get('/aulas/nova', [controllerAula::class, 'create'])->name('novaAula');
Route::post('/aulas', [controllerAula::class, 'store'])->name('gravaNovaAula');
Route::get('/aulas/apagar/{id}', [controllerAula::class, 'destroy'])->name('deletaAula');
Route::get('/aulas/editar/{id}', [controllerAula::class, 'edit'])->name('editaAula');
Route::post('/aulas/{id}', [controllerAula::class, 'update'])->name('atualizaAula');
Route::get('/aulas/pesquisar', [controllerAula::class, 'pesquisarAula'])->name('pesquisarAula');
Route::get('/aulas/procurar', [controllerAula::class, 'procurarAula'])->name('procurarAula');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
