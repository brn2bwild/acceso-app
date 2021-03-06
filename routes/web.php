<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtletaController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\DispositivoController;
use App\Models\Atleta;

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
//     return route('atletas.index');
// });

Route::resource('atletas', AtletaController::class);
Route::resource('registros', RegistroController::class)->only([
    'index'
]);
Route::resource('dispositivos', DispositivoController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::view('/privacidad', 'privacy')->name('privacy');

require __DIR__.'/auth.php';
