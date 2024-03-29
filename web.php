<?php

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

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/', function () { 
    return 'Welcome to the homepage!';
});
Route::get('/about', function () 
{ return 'About Us';
}); 
Route::get('/contact/{name}', function ($name) { return 'Contact ' . $name; });
