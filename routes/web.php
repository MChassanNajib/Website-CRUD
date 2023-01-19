<?php


use App\Http\Controllers\MuatanController;
use App\Http\Controllers\BongkaranController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\registerontroller;
use App\Http\Controllers\sessionController;
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
    return view('home.home');
});

Route::get('/dashboard', function () {
    return view('dashboard.layouts.main');
});

route::group(['prefix' => '/muatan'], function(){
    Route::get('/all', [MuatanController:: class, 'index']);
    Route::get('/detail/{muatan}',[MuatanController::class,'show']);
    Route::get('/create', [MuatanController:: class, 'create']);
    Route::post('/add', [MuatanController:: class, 'store']);
    Route::get('/edit/{muatan}',[MuatanController::class,'edit']);
    Route::post('/update/{muatan}', [MuatanController:: class, 'update']);
    Route::delete('/delete/{muatan}',[MuatanController::class,'destroy']);
});


route::group(['prefix' => '/bongkaran'], function(){
    Route::get('/all', [BongkaranController:: class, 'index']);
    Route::get('/detail/{bongkaran}',[BongkaranController::class,'show']);
    Route::get('/create', [BongkaranController:: class, 'create']);
    Route::post('/add', [BongkaranController:: class, 'store']);
    Route::get('/edit/{bongkaran}',[BongkaranController::class,'edit']);
    Route::post('/update/{bongkaran}', [BongkaranController:: class, 'update']);
    Route::delete('/delete/{bongkaran}',[BongkaranController::class,'destroy']);
});

Route::get('/sesi', [SessionController::class, 'index'])->name('login')->middleware('guest');
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout'])->middleware('auth');
Route::get('/sesi/register', [SessionController::class, 'register'])->middleware('guest');
Route::post('/sesi/create', [SessionController::class, 'create']);

Route::group(["prefix" => "/dashboard"], function(){
    Route::get('/home', function(){
        return view('/data.home');
    })->middleware('auth');
});