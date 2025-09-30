<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerCurso;

Route::get('/', function () {
    return view('index');
})->name('inicio')->middleware('auth');

Route::get('/cursos', [controllerCurso::class, 'index'])->name('indexCursos');
Route::get('/cursos/novo', [controllerCurso::class, 'create'])->name('novoCurso');
Route::post('/obras', [controllerCurso::class, 'store'])->name('gravaNovoCurso');
Route::get('/cursos/apagar/{id}', [controllerCurso::class, 'destroy'])->name('deletaCurso');
Route::get('/cursos/editar/{id}', [controllerCurso::class, 'edit'])->name('editaCurso');
Route::post('/cursos/{id}', [controllerCurso::class, 'update'])->name('atualizaCurso');
Route::get('/cursos/pesquisar', [controllerCurso::class, 'pesquisarCurso'])->name('pesquisarCurso');
Route::get('/cursos/procurar', [controllerCurso::class, 'procurarCurso'])->name('procurarCurso');
Route::get('/cursos/donwload/{id}', [controllerCurso::class, 'download'])->name('donwload');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
