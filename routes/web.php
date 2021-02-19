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

// Route::get('/', [PalestrasController::class, 'index']);

Route::get('/', PalestrasController::class)->name('home');

Route::post('palestras', [FuncionarioController::class, 'login'])->name('funcionario.login');

//Route::get('/palestras', [PalestrasController::class, 'palestras']);

Route::get('/cadastro', [PalestrasController::class, 'cadastro']);

Route::get('/showvideo', [PalestrasController::class, 'showvideo']);

Route::get('/confirma', [PalestrasController::class, 'confirma']);





// Route::get('/', function() {
//     return view('index');
// });



