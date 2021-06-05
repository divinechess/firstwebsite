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

Route::get('/', [\App\Http\Controllers\PagesController::class, 'getHome']);
Route::get('/about', [\App\Http\Controllers\PagesController::class, 'getAbout']);
Route::get('/contact', [\App\Http\Controllers\PagesController::class, 'getContact']);



// Route::post('/contact/submit','MessagesController@submit'); old version format
// Route::post('/contact/show2', [MessagesController::class, 'show']);
Route::post('/contact.submit', [MessagesController::class, 'submit']);
Route::get('/messages', [MessagesController::class, 'getMessages']);

