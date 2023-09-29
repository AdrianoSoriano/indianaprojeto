<?php

use App\Http\Controllers\AddGamesController;
use App\Http\Controllers\CadastroUsuarioController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Models\AddGames;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\DependencyInjection\AddConsoleCommandPass;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/', [PrincipalController::class, 'read'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::get('/cadastro/{erro?}', [CadastroUsuarioController::class, 'index'])->name('site.cadastro');
Route::post('/cadastro', [CadastroUsuarioController::class, 'cadastrar'])->name('site.cadastro');

Route::get('/login/{erro?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('site.login');

Route::middleware('autenticacao:padrao')->prefix('/app')->group(function(){
    Route::get('/home',[HomeController::class, 'index'])->name('app.home');
    Route::get('/home',[HomeController::class, 'read'])->name('app.home');
    Route::get('/sair',[LoginController::class, 'sair'])->name('app.sair');
    
    Route::get('/profile', [CadastroUsuarioController::class, 'profile'])->name('app.profile');
    Route::post('/profile', [CadastroUsuarioController::class, 'editar'])->name('app.profile');

    Route::get('/addgames', [AddGamesController::class, 'index'])->name('app.addgames');
    Route::post('/addgames', [AddGamesController::class, 'cadastrar'])->name('app.addgames');
    Route::get('/profilegames',[AddGamesController::class, 'profilegames'])->name('app.profilegames');
    Route::get('/profilegames',[AddGamesController::class, 'read'])->name('app.profilegames');
});

Route::fallback(function (){
    echo 'A pagina acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para a página inicial';
});