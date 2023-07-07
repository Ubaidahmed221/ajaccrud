<?php

use App\Http\Controllers\memberController;
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

Route::get('/',[memberController::class,'index']);
Route::get('/show',[memberController::class,'getmember']);
Route::post('/save',[memberController::class,'save']);
Route::post('/update',[memberController::class,'update']);
Route::post('/delete',[memberController::class,'delete']);




