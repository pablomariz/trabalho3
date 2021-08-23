<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\CursosController;

Route::redirect('/', '/admin/cursos');


Route::prefix('admin')->name('admin.')->group(function(){

/*
    Route::get('cursos', [CidadeController::class, 'cidades'])->name('cidades.listar');
    Route::get('cursos/adicionar', [CidadeController::class, 'formAdicionar'])->name('cidades.form');
    Route::post('cursos/adicionar', [CidadeController::class, 'formSave'])->name('cidades.adicionar');
    Route::delete('cursos/{id}', [CidadeController::class, 'deletar'])->name('cidades.deletar');
    Route::get('cursos/{id}', [CidadeController::class, 'formEditar'])->name('cidades.formEditar');
    Route::put('cursos/{id}', [CidadeController::class, 'editar'])->name('cidades.editar');
*/
    Route::resource('cursos', CursosController::class);



});


Route::get('/sobre', function () {
    return '<h1>Sobre</h1>';
});
