<?php


use App\Http\Controllers\MuatanController;
use App\Http\Controllers\BongkaranController;
use App\Http\Controllers\LoginController;
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


route::get('/loginview',[LoginController::class,'login']);
route::post('/loginview/loginsuccess',[LoginController::class,'loginsuccess']);
route::get('/loginview/signoutt',[LoginController::class,'signoutt']);