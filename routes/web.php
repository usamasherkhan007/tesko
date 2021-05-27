<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('auth/login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
/* Route::middleware(['auth:sanctum', 'verified'])->get('/main', function () {
	  return view('include/main_page');
})->name('main'); */
Route::middleware(['auth:sanctum', 'verified'])->get('/main', 'Video@index');

Route::get('/add_video', 'Video@add_video');
Route::get('/list_video', 'Video@list_video');
Route::post('/save_video', 'Video@save_video');
Route::get('/delete_video/{id}', 'Video@delete_video');
Route::get('/edit_video/{id}', 'Video@edit_video');
 Route::resource('/video', 'Video');