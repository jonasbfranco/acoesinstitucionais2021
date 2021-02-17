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


Route::get('/', [PalestrasController::class, 'index']);

Route::get('/palestras', [PalestrasController::class, 'palestras']);

Route::get('/showvideo', [PalestrasController::class, 'showvideo']);

Route::get('/confirma', [PalestrasController::class, 'confirma']);


