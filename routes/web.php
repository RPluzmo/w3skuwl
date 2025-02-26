<?php

use Illuminate\Support\Facades\Route;

Route::get('/w3skuwl', function () {
    return view('w3skuwl');
});

Route::get('/HTML', function () {
    return view('HTML');
});

Route::get('/CSS', function () {
    return view('CSS');
});

Route::get('/JAVASCRIPT', function () {
    return view('JAVASCRIPT');
});

Route::get('/SQL', function () {
    return view('SQL');
});

Route::get('/PYTHON', function () {
    return view('PYTHON');
});

Route::get('/JAVA', function () {
    return view('JAVA');
});

Route::get('/PHP', function () {
    return view('PHP');
});