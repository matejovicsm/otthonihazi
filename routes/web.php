<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\elso;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/autorogzites', function () {
    return view("autorogzites");
});
Route::get('/elso',[elso::class,"jah"]);
