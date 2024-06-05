<?php

use Illuminate\Support\Facades\Route;
use App\Models\student;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', function () {
    return \App\Models\student::first();
});

Route::get('/students', function () {
    return \App\Models\student::all();
});

Route::get('/student/{student}', function (student $student) {
    return $student;
});
