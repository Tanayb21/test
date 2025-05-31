<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/solutions', function () {
    return view('solutions');
});

Route::get('/services', function () {
    return view('services');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/form', function () {
    return view('form');
})->name('form');
Route::post('/submit-form', [FormController::class, 'submit'])->name('submit.form');
