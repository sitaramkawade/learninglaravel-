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
use App\Http\Controllers\test;
Route::get('/', function () {
    return view('test');
});
// Route::post('/t', [test::class, 'show']);

// Route::view("login","test");
// Route::get('/t', function () {
//     return view('t');
// });
Route::resource('/','test');
use App\Http\Controllers\test;
Route::get('/', function () {
    return view('test');
});