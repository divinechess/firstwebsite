<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;
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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::post('/contact/submit','MessagesController@submit'); old version format
// Route::post('/contact/show2', [MessagesController::class, 'show']);
Route::post('/contact.submit', [MessagesController::class, 'submit']);
