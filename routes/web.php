<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberInputController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/recipe', function () {
    return view('recipe');
});
// Route::get('/allmember',[MemberInputController::class,'getall'])->middleware('isUser');
Route::get('/allmember',[MemberInputController::class,'getall']);

Route::get('/report',[MemberInputController::class,'index'])->middleware('isUser');
Route::get('/home',[AuthController::class,'home']);

// Route::get('/register',[AuthController::class,'register']);
// Route::post('/register',[AuthController::class,'registerPost']);

Route::get('/login',[AuthController::class,'login']);
Route::post('/login',[AuthController::class,'loginPost']);

Route::get('/register',[UserController::class,'register']);
Route::post('/registerpost',[UserController::class,'registerPost']);