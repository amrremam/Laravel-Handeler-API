<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', [AppController::class,'test_api']);




// Route::get('/{any?}', '[AppController::class,'index'])->where('any', '.*');


/*use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class,'index'])->name('home');*/
