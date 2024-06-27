<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobrenosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Middleware\AutenticacaoMiddleware;
use App\Http\Controllers\ProdutoDetalheController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(LogAcessoMiddleware::class)->get('/', [PrincipalController::class, 'index'])->name('site.index');

Route::get('/login/{erro?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'login'])->name('site.login');
Route::get('/sobre-nos', [SobrenosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'store'])->name('site.store');

Route::prefix('/app')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('app.home');
    Route::get('/logout', [LoginController::class, 'logout'])->name('app.logout');

    Route::get('/fornecedor', [FornecedorController::class, 'index'])->name('app.fornecedor.index');
    Route::post('/fornecedor', [FornecedorController::class, 'index'])->name('app.fornecedor.index');
    Route::get('/fornecedor/create', [FornecedorController::class, 'create'])->name('app.fornecedor.create');
    Route::get('/fornecedor/edit/{id}', [FornecedorController::class, 'edit'])->name('app.fornecedor.edit');
    Route::post('/fornecedor/store', [FornecedorController::class, 'store'])->name('app.fornecedor.store');
    Route::put('/fornecedor/update/{id}', [FornecedorController::class, 'update'])->name('app.fornecedor.update');
    Route::delete('/fornecedor/delete/{id}', [FornecedorController::class, 'destroy'])->name('app.fornecedor.destroy');

    Route::get('/cliente', [ClienteController::class, 'index'])->name('app.cliente');

    Route::get('/produto', [ProdutoController::class, 'index'])->name('app.produto.index');
    Route::get('/produto/create', [ProdutoController::class, 'create'])->name('app.produto.create');
    Route::post('/produto', [ProdutoController::class, 'store'])->name('app.produto.store');
    Route::get('/produto/edit/{id}', [ProdutoController::class, 'edit'])->name('app.produto.edit');
    Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->name('app.produto.destroy');
    Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('app.produto.show');
    Route::put('/produto/{id}', [ProdutoController::class, 'update'])->name('app.produto.update');

    Route::get('/produtodetalhe', [ProdutoDetalheController::class, 'index'])->name('app.produtodetalhe');
    Route::get('/produtodetalhe/create', [ProdutoDetalheController::class, 'create'])->name('app.produtodetalhe.create');
    Route::post('/produtodetalhe', [ProdutoDetalheController::class, 'store'])->name('app.produtodetalhe.store');
    Route::put('/produtodetalhe/{id}', [ProdutoDetalheController::class, 'update'])->name('app.produtodetalhe.update');
});


Route::fallback(function () {
    echo 'teste de fallback';
});
