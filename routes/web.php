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

//Start_First_Route

Route::get('/student{student}', function ($id) {
    return student::where('id', $id)->first();
});

//End_First_Route

//Start_Easy_Route
Route::get('/student/{student}', function (student $student) {
    return $student;
});

//End_Easy_Route
Route::get('/myuser/{user}', function (User $user) {
    return $user;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
