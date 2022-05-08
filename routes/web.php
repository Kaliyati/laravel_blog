<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Auth::routes();
Route::middleware(['auth',  'verified'])->group(function () {
    Route::get('/home',          [PostController::class,'index']);;
    Route::get('/posts',         [PostController::class,'index']);
    Route::get('/edit/{id}',     [PostController::class,'edit']);
    Route::get('/delete/{id}',   [PostController::class,'destroy']);
    Route::get('/view/{id}',     [PostController::class,'show']);
    Route::get('/add',           function () {return view('pages/ui/add');});

    Route::post('/update',       [PostController::class,'update']);
    Route::post('/store',        [PostController::class,'store']);
  
   
});