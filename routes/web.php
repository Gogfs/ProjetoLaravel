<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrincipalController;

Route::get('/',[PrincipalController::class, 'principal'])->name('site.index');

Route::get('/cursos',[PrincipalController::class, 'cursos'])->name('site.cursos');

Route::get('/contato',[PrincipalController::class, 'contato'])->name('site.contato');

Route::get('/departamentos',[PrincipalController::class, 'departamentos'])->name('site.departamentos');