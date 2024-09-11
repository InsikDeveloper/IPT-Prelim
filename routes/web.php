<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Homepage');
});
Route::get('/item', function () {
    return view('ItemPage');
});
Route::get('/picture', function () {
    return view('PicturePage');
});
