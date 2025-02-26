<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('mainpage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/users', function () {
    $users = ['Petr', 'Alex', 'Kate', 'Daniil'];
    return view('users', ['users' => $users]);
});

Route::get('/uppercase', function () {
    return view('testdir');
});
