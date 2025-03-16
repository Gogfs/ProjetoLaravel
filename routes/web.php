<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrincipalController;

Route::get('/',[PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobrenos',[PrincipalController::class, 'sobrenos'])->name('site.sobrenos');

Route::get('/contato',[PrincipalController::class, 'contato'])->name('site.contato');

Route::get('/produtos',[PrincipalController::class, 'produto'])->name('site.produtos');

Route::get('/servicos',[PrincipalController::class, 'servico'])->name('site.servicos');

Route::get('/endereco',[PrincipalController::class, 'endereco'])->name('site.endereco');