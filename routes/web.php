<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtecController;

Route::get('/', [EtecController::class, 'index'])->name('site.index');
Route::get('/sobre-nos', [EtecController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/cursos', [EtecController::class, 'cursos'])->name('site.cursos');
Route::get('/galeria', [EtecController::class, 'galeria'])->name('site.galeria');
Route::get('/contato', [EtecController::class, 'contato'])->name('site.contato');
Route::post('/contato', [EtecController::class, 'enviarContato'])->name('site.contato.enviar');
