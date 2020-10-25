<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MagnitudeController;

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

Route::resource('/magnitudes', 'App\Http\Controllers\MagnitudeController');

Route::resource('/units', 'App\Http\Controllers\UnitController');

Route::resource('/formulas', 'App\Http\Controllers\FormulaController');

Route::get('/tasks', 'App\Http\Controllers\TaskController@index');

Route::post('/tasks', 'App\Http\Controllers\TaskController@parameters');

Route::get('/parameters', 'App\Http\Controllers\TaskController@parameters');

Route::post('/parameters/{magnitude_id}', 'App\Http\Controllers\TaskController@problemSolving');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
