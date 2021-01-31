<?php

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
    return redirect('/messages');
});

Route::resource('messages',\App\Http\Controllers\MessageController::class);

\Illuminate\Support\Facades\Auth::routes();

Route::get('/home', function () {
    return redirect('/messages');
})->name('home');
