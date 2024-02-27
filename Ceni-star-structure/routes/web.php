<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/dash', function () {
    return view('dash-admin');
});
Route::get('/mail', function () {
    return view('myTestMail');
});


Route::get('/email', [PdfController::class, 'index']);



