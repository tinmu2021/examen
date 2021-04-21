<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrnitologoController;
use App\Http\Controllers\AveController;
use App\Http\Controllers\AvistamientoController;

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
Route::get('/ornitologo',[OrnitologoController::class,'index'])->name('formOrnitologo');
Route::post('/ornitologo',[OrnitologoController::class,'create'])->name('createOrnitologo');


Route::get('/ave',[AveController::class,'index'])->name('formAve');
Route::post('/ave',[AveController::class,'create'])->name('createAve');

