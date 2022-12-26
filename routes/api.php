<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GeneralController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;


Route::post('login', [AuthController::class ,'login']);


Route::get('all_user', [GeneralController::class,'all_user']);

Route::group(['middleware' => ['jwt.auth']], function () {
   Route::get('my_posts', [UserController::class,'index']);


   Route::post('logout', [AuthController::class,'logout']);
});
