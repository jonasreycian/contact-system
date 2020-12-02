<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('contacts', ContactController::class)->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::get('/home', [AuthController::class, 'login']);
    Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
});
