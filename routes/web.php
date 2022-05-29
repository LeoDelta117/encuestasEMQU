<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EncuestaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/graficas', function () {
    return view('encuestas.graficas');
})->name('graficas');

Route::resource('/', EncuestaController::class);
Route::post('/all', [EncuestaController::class, 'all']);
Route::post('/promedio', [EncuestaController::class, 'promedio']);
Route::post('/edad', [EncuestaController::class, 'edad']);
