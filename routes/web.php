<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//ROTAS DO PROJETO
use App\Http\Controllers\ContactController;

//ROTA DA INDEX PRINCIPAL
Route::get('/', [ContactController::class, 'index']);

//ROTA DO CRIAR
Route::get('/novo', [ContactController::class, 'create']);
Route::post('/store', [ContactController::class, 'store']);

//ROTA DE VISUALIZAÇÃO UNICO
Route::get('/contato/{id}', [ContactController::class, 'show']);

//ROTA DE EDIÇÂO
Route::get('/editar/{id}', [ContactController::class, 'edit']);
Route::put('/update/{id}', [ContactController::class, 'update']);

//ROTA DE REMOÇÃO
Route::get('/remover/{id}', [ContactController::class, 'destroy']);