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

use App\Http\Controllers\PalestrasController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AdminController;


Route::get('/', [FuncionarioController::class, 'index'])->name('home');

Route::post('/', [FuncionarioController::class, 'login'])->name('funcionario.login');

Route::get('/cadastro', [FuncionarioController::class, 'cadastrar']);

Route::post('/cadastro', [FuncionarioController::class, 'salvar'])->name('funcionario.salvar');



//Route::get('/', PalestrasController::class)->name('home'); Este é para usar o __invoke que sempre é executado

Route::get('/palestras', [PalestrasController::class, 'palestras']);

Route::get('/showvideo', [PalestrasController::class, 'showvideo']);

Route::get('/confirma', [PalestrasController::class, 'confirma']);

//Route::post('/confirma', [PalestrasController::class, 'salvar'])->name('palestras.confirmar');



Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/create', [AdminController::class, 'create']);

Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);

Route::put('/admin/update/{id}', [AdminController::class, 'update']);

Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy']);

Route::post('/admin', [AdminController::class, 'salvar'])->name('palestra.salvar');



// Route::get('/', function() {
//     return view('index');
// });



