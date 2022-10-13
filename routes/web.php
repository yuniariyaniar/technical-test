<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BuyController;
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

Route::get('/umum', function () {
    return view('umum');
})->name('umum');


Route::get('/', function () {
    return view('login');
})->name('login');




Route::post('/postlogin',[LoginController::class,'postlogin']);
Route::get('logout', '\App\Http\Controllers\AuthController@logout');


Route::group(['middleware' => ['auth']], function(){
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Auth::routes();

route::get('/issue',[App\Http\Controllers\IssueController::class,'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*customer section*/
Route::post('/save',[App\Http\Controllers\BuyController::class,'save']);
route::get('/buy',[App\Http\Controllers\BuyController::class,'index']);
Route::get('/create-buy',[App\Http\Controllers\BuyController::class,'create']);

route::get('/tiket',[App\Http\Controllers\TiketController::class,'index']);