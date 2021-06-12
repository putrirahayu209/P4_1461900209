<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
use App\Exports\BukuExport;

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
Route::get('/BukuController/export_excel', 'App\Http\Controllers\BukuController@export_excel');
Route::get('/buku0209','App\Http\Controllers\BukuController@create');
Route::resource('buku0209',BukuController::class);