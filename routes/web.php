<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

# GET /home
Route::get(
    '/home',
    [HomeController::class, 'getHome']
)->name('home');

# GET /sqli
Route::get(
    '/sqli',
    [HomeController::class, 'getSqli']
)->name('sqli');

# POST /sqli
Route::post(
    '/sqli',
    [HomeController::class, 'postSqli']
)->name('post_sqli');