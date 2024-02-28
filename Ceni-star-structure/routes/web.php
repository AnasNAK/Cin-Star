<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\ProviderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
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

//------------------------------------------client pages
Route::get('/home/h', [FilmController::class, 'search'])->name('films.search');
Route::get('/home/film', [FilmController::class, 'search'])->name('film.show');
Route::get('/home', [FilmController::class, 'index'])->name('client');
                        //------------CRUD Actor
Route::post('dashboard/actors', [ActorController::class, 'store'])->name('actors.store');
Route::put('dashboard/actors/{id}', [ActorController::class, 'update'])->name('actors.update');
Route::delete('dashboard/actors/{id}', [ActorController::class, 'destroy'])->name('actors.destroy');
                        //------------CRUD Genre
Route::post('dashboard/genres', [GenreController::class, 'store'])->name('Genres.store');
Route::put('dashboard/genres/{id}', [GenreController::class, 'update'])->name('Genres.update');
Route::delete('dashboard/genres/{id}', [GenreController::class, 'destroy'])->name('Genres.destroy');





Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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





require __DIR__ . '/auth.php';
