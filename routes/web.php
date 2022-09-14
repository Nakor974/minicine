<?php

use App\Http\Controllers\FilmsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('Films', function () {
    return view('Films');
});

Route::get('accueil', function () {
    return view('accueil');
});

Route::get('Salles', function () {
    return view('Salles');
});

Route::get('Réalisateurs', function () {
    return view('Réalisateurs');
});

Route::get('crudfilms', [FilmsController::class, 'getAll'] );


Route::get('addfilm', function () {
    return view('addfilm');
});


