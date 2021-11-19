<?php

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
    return view('welcome');
});

Route::get('/animals', function () {
    echo "menampilkan data animals";
});

Route::post('/animals', function () {
    echo "menambahkan hewan baru";
});

Route::put('/animals', function () {
    echo "mengupdate data hewan";
});

Route::delete('/animals', function () {
    echo "menghapus data hewan";
});