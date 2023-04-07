<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*///test
Route::get('/test', function () {
    return view('client.test');
});

// login
Route::get('/login', function () {
    return view('client.login');
});
Route::post('/login',[LoginController::class,'loginUser']);

//register
Route::get('/register', function () {
    return view('client.register');
});
Route::post('/register',[LoginController::class,'registerUser']);

//Form Infomation
Route::get('/form-infomation', function () {
    return view('client.form_infomation');
});
Route::post('/form-infomation',[LoginController::class,'infomationUser']);

//Index
Route::get('/dashboard', function () {
    return view('server.index');
});

//Cau hoi
Route::get('/form-diencauhoi', function () {
    return view('server.form_diencauhoi');
});
Route::post('/form-diencauhoi', [AdminController::class,'addCauhoi']);

Route::get('/danh-sach-cau-hoi', [AdminController::class,'showcauhoi']);
//Môn học
Route::get('/form-monhoc', function () {
    return view('server.form_monhoc');
});
Route::post('/form-monhoc',[AdminController::class,'addMonhoc']);
Route::get('/danh-sach-mon',[AdminController::class,'showMonhoc']);
Route::get('/edit-mon/{id}',[AdminController::class,'showeditMonhoc']);
Route::post('/edit-mon/{id}',[AdminController::class,'editMonhoc']);
Route::get('/delete-mon/{id}',[AdminController::class,'delMonhoc']);