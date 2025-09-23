<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerModelart;

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/obras', [controllerModelart::class, 'index'])->name('indexObras');
Route::get('/obras/novo', [controllerModelart::class, 'create'])->name('novaObra');
Route::post('/obras', [controllerModelart::class, 'store'])->name('gravaNovaObra');
Route::get('/obras/apagar/{id}', [controllerModelart::class, 'destroy'])->name('deletaObra');
Route::get('/obras/editar/{id}', [controllerModelart::class, 'edit'])->name('editaObra');
Route::post('/obras/{id}', [controllerModelart::class, 'update'])->name('atualizaObra');
Route::get('/obras/pesquisar', [controllerModelart::class, 'pesquisarObra'])->name('pesquisarObra');
Route::get('/obras/procurar', [controllerModelart::class, 'procurarObra'])->name('procurarObra');
Route::get('/obras/donwload/{id}', [controllerModelart::class, 'download'])->name('donwload');