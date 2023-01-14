<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//
Route::get('/',[\App\Http\Controllers\HomeControle::class,'home']);
Route::get('/galary',[\App\Http\Controllers\HomeControle::class,'galary']);
Route::get('/about',[\App\Http\Controllers\HomeControle::class,'about']);
Route::get('/form',[\App\Http\Controllers\HomeControle::class,'form'])->name('register');
Route::post('/form',[\App\Http\Controllers\FormController::class,'contactForm'])->name('register');


Route::get('/datacustomer',[\App\Http\Controllers\DashboardController::class,'cdata']);


Route::get('/admin',[App\Http\Controllers\CloginController::class,'Clogin'])->name('login');
Route::post('/clog',[\App\Http\Controllers\CloginController::class,'sendData'])->name('send');
Route::get('/dash',[\App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
Route::get('/profile',[\App\Http\Controllers\DashboardController::class,'profile']);
Route::post('/changepassword',[\App\Http\Controllers\LogOutController::class,'passwordChange'])->name('attemptChangePassword');


Route::get('/logout',[\App\Http\Controllers\LogOutController::class,'logout']);

Route::get('send',[\App\Http\Controllers\SendMailController::class.'sendnotification']);


//Auth::routes();


