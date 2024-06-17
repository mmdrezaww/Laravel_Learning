<?php

use Illuminate\Support\Facades\Route;
use App\Models\student;
use App\Models\User;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', function () {
    return \App\Models\student::first();
});

Route::get('/students', function () {
    return \App\Models\student::all();
});


Route::get('/student{student}', function ($id) {
    return student::where('id', $id)->first();
});


Route::get('/student/{student}', function (student $student) {
    return $student;
});

Route::get('/myuser/{user}', function (User $user) {
    return $user;
});


//Start_Work
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
