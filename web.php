<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteControlador;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/clientes')->group( function() {
     Route::get('/', [ClienteControlador::class, 'index']);
     Route::get('/cadastro', [ClienteControlador::class, 'create']);
     Route::post('/', [ClienteControlador::class, 'store']);
     Route::get('/info/{id}', [ClienteControlador::class, 'show']);
     Route::get('/edit/{id}', [ClienteControlador::class, 'edit']);
     Route::post('{id}', [ClienteControlador::class, 'update']);
     Route::get('/delete/{id}', [ClienteControlador::class, 'destroy']);
});


