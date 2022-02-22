<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

Route::get('welcome/', function () {
    return view('welcome');
});



Route::get('/', function () {
    return view('index');
});

Route::get('/shoes', function () {
    return view('shoes');
});

Route::get('/collection', function () {
    return view('collection');
});

Route::get('/racing-boot', function () {
    return view('racing-boot');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('send-mail',[MailController::class,'sendEmail']);