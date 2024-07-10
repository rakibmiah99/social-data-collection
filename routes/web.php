<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hellos';
    return view('welcome');
});
