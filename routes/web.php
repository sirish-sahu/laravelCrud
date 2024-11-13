<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route; 


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

Route::get('/', [RegisterController::class,"display"])->name("welcome");

Route::get('/register', function () {
    return view('register');
});

Route::post('/store', [RegisterController::class,"store"]);

Route::get('delete/{id}',[RegisterController::class,"delete"]);

Route::get('update/{id}',[RegisterController::class,"update"]);

Route::post('updateInDb',[RegisterController::class,"updateInDb"]);


