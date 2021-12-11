<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
Route::get('/api/{search?}', [APIController::class, 'ajax'])->name('facts.api');
Route::get('/api/like', [APIController::class, 'liker'])->name('facts.liker');

Route::get('login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'login_post'])->name('login.post');
Route::get('register', [RegisterController::class, 'register'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class, 'register_post'])->name('register.post');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
Route::resource('fact', FactController::class, [
    'names' => [
        'index' => 'fact.index',
        'store' => 'fact.store',
        'show' => 'fact.show',
    ]
]);


Route::group(['middleware'=>'auth'], function(){

});
