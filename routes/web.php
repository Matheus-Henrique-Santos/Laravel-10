<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PrincipalController::class,'principal'])->name('site.index');

Route::get('/sobre-nos', [SobreNosController::class,'sobreNos'])->name('site.sobre-nos');

Route::get('/contato', [ContatoController::class,'contato'])->name('site.contato');

Route::get('/login', function(){ return 'login'; })->name('site.login');

Route::prefix('/clientes')->group(function(){
    Route::get('/login', function(){return 'clientes'; })->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'produtos'; })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('site.rota');

Route::fallback(function(){
    echo 'A rota informada não existe  <a href="'.route('site.sobre-nos').'">clique aqui</a>';
});