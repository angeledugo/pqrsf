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
use App\Http\Controllers\SolicitudController;

Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/register', function () {
    return view('registro');
})->name('register.index');


Route::get('/consulta', function () {
    return view('consulta');
})->name('consulta.index');


Route::post('solictud/store', [SolicitudController::class,'store'])->name('solicitud.store');
Route::post('solictud/show', [SolicitudController::class,'show'])->name('solicitud.show');
