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
*/
Route::get('/', function () {
    return view('layout/PageHome');
})->name('home');

Route::get('/about', function () {
    return view('layout/PageAbout');
})->name('about');

Route::get('/contacto', function () {
    return view('layout/PageContacto');
})->name('contacto');

Route::get('/tools', function () {
    return view('layout/PageTools');
})->name('tools');

Route::get('/projects', function () {
    return view('layout/PageProjects');
})->name('projects');


Route::fallback(function () {
    return view('errors.error');
});



