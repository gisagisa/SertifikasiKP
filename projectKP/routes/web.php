<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;


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

//  Route::get('/', function () {
//      return view('index');
//  });


// Route::get('/', function () {
//     return redirect() ->route('dashboard.index');
// }); 

route::get('/', [IndexController::class,'index']);

Route::get('/login', [LoginController::class,'index']);

Route::get('/register', [RegisterController::class,'index']);

Route::post('/register', [RegisterController::class,'store']);

Route::get('/contact', [ContactController::class,'index']);