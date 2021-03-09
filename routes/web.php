<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController as SC;

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
