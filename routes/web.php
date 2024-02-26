<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicoController;

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

Route::get('/', HomeController::class);

Route::controller(indexController::class)->group(function(){

    Route::get('index',  'index');

    Route::get('login',  'login');

    Route::get('informacion', 'informacion');

    Route::get('contactanos', 'contactanos');

    Route::get('sobre_nosotros', 'sobre_nosotros');


});
