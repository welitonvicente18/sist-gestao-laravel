<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobrenosController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PrincipalController::class, 'index'])->name('site.index');
Route::get('/sobre-nos', [SobrenosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'store'])->name('site.store');

Route::prefix('/app')->group(function () {
    Route::get(
        '/clientes',
        function () {
            return 'clientes';
        }
    );
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
});


Route::fallback(function () {
    echo 'teste de fallback';
});
