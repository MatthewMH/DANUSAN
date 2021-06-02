<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationcontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HalamanTokoController;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProsesPembelianController;
use App\Http\Controllers\KonfirmasiPembelianController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
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

Route::get('/signup', [registrationcontroller::class, 'create']);
Route::post('/signup', [registrationcontroller::class, 'store']);
Route::get('/signup_exception', [registrationcontroller::class, 'exception1']);
Route::get('/signup_konfirmexception', [registrationcontroller::class, 'exception2']);
Route::get('/view',[registrationcontroller::class, 'view_home']);
Route::get('/signup_exception2', [registrationcontroller::class, 'view_exception2']);

Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'in']);
Route::get('/login_exception', [LoginController::class, 'exception1']);
Route::get('/login_exception2', [LoginController::class, 'exception2']);
Route::post('/', [LoginController::class, 'logout']);

Route::get('/home/{id}', [HalamanTokoController::class, 'create']);
Route::post('home/search/{id}',[HalamanTokoController::class, 'search']);

Route::post('/home/simpanan/{id}', [SimpananController::class, 'create']);
Route::get('/home/simpanan/{id}', [SimpananController::class, 'create']);
Route::post('/saved', [SimpananController::class, 'saves']);

Route::get('/home/history/{id}', [HistoryController::class, 'create']);
Route::post('/home/history/{id}', [HistoryController::class, 'create']);

Route::post('/home/{namatoko}/{id}', [TokoController::class, 'create']);
Route::get('/home/{namatoko}/{id}', [TokoController::class, 'create']);

Route::post('/home/{namatoko}/{namamakanan}/pembelian/{id}',[ProsesPembelianController::class, 'create']);
Route::post('/process', [ProsesPembelianController::class, 'process']);

Route::get('/home/{namatoko}/{namamakanan}/Konfirmasi/{id}',[KonfirmasiPembelianController::class, 'create']);

Route::post('/transaction',[TransaksiController::class, 'save_to_db']);

Route::get('/admin', [AdminController::class, 'create']);
Route::post('/admin/input', [AdminController::class, 'input']);
Route::get('/admin/input', [AdminController::class, 'input']);
Route::post('/admin/input/proses', [AdminController::class, 'saves']);


Route::post('/editprofile/{id}', [ProfileController::class, 'create']);
Route::get('/editprofile/{id}', [ProfileController::class, 'create']);
Route::post('/editprofile/saves/{id}', [ProfileController::class, 'edit']);
Route::get('/', function () {
    return view('index');
});
