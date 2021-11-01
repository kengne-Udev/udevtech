<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;

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

Route::get('/home', function () {
    return view('welcome');
});

// clients
// Route::get('clients', [ClientController::class, 'index']);
// Route::get('clients/create', [ClientController::class, 'create']);
// Route::post('clients', [ClientController::class, 'store']);
// Route::get('clients/{client}', [ClientController::class, 'show']);
// Route::get('clients/{client}/edit', [ClientController::class, 'edit']);
// Route::patch('clients/{client}', [ClientController::class, 'update']);
// Route::delete('clients/{client}', [ClientController::class, 'destroy']);

Route::resource('clients', ClientController::class);

//Contact

Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);

