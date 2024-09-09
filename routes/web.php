<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first', function () {
    $a = 1;
    $b = 2;
    $c = $a + $b;
    dd($c);
    

    return view('first',compact('c'));
});

