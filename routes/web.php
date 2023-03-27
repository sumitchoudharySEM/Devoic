<?php

use Illuminate\Support\Facades\Route;


//create routes view for home about and other pages
Route::view('/','pages/home');
Route::view('/about','pages/about');
Route::view('/cource','pages/cource');
Route::view('/programs','pages/programs');
