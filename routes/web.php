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
|
*/

Route::get('/', function () {
    $data = [
        "title" => "BENVENUTO IN LARAVEL",
        "paragraf" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam accusamus quasi, suscipit tempore corrupti
            maxime hic aliquam nobis repellendus porro illum perspiciatis quae praesentium ad ducimus aperiam optio nam
            consequatur."
    ];
    return view('welcome', $data);
});

Route::get('/altro', function () {
    $data = [
        "other" => "ALTRAO FILE STESSA VIA"
    ];
    return view('altro', $data);
});
