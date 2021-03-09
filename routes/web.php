<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController as SC;
use App\Http\Controllers\RayonController as RC;

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

Route::get('/siswa', [SC::class, 'index']); //url /siswa dengan method get -> masuk ke siswa controller dengan function index
Route::get('/siswa/create', [SC::class, 'create'])->name('siswa.create');
Route::post('/siswa/store', [SC::class, 'store']);
Route::get('/siswa/edit/{id}', [SC::class, 'edit']);
Route::patch('siswa/update/{id}', [SC::class, 'update']);
Route::delete('/siswa/delete/{id}', [SC::class, 'delete']);

Route::get('/rayon', [RC::class, 'index']); //url /rayon dengan method get -> masuk ke rayon controller dengan function index
Route::get('/rayon/create', [RC::class, 'create'])->name('rayon.create');
Route::post('/rayon/store', [RC::class, 'store']);
Route::get('/rayon/edit/{id}', [RC::class, 'edit']);
Route::patch('rayon/update/{id}', [RC::class, 'update']);
Route::delete('/rayon/delete/{id}', [RC::class, 'delete']);
