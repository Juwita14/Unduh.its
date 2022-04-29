<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RingkasanController;
use App\Http\Controllers\FiturController;

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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('minitab', function()
{
    return view('minitab');
});

Route::get('mathematica', function()
{
    return view('mathematica');
});

Route::get('labview', function()
{
    return view('labview');
});

Route::get('awal', function()
{
    return view('awal');
});

Route::get('awal2', function()
{
    return view('awal2');
});

Route::get('ringkasan', function()
{
    return view('ringkasan');
});

Route::get('filedownload', function()
{
    return view('filedownload');
});

Route::get('spesifikasi', function()
{
    return view('spesifikasi');
});

Route::get('preview', function()
{
    return view('preview');
});  

Route::get('connectdb', function () {
    return view('connectdb');
});

Route::get('/ringkasan', [RingkasanController::class, 'index']); 
Route::get('/ringkasan/create', [RingkasanController::class, 'create']);
Route::post('/ringkasan/store', [RingkasanController::class, 'store']);
Route::get('/ringkasan/{id}/edit', [RingkasanController::class, 'edit']); 
Route::put('/ringkasan/{id}', [RingkasanController::class, 'update']); 
Route::delete('/ringkasan/{id}', [RingkasanController::class, 'destroy']); 

Route::get('/spesifikasi', [FiturController::class, 'index']); 
Route::get('/spesifikasi/create', [FiturController::class, 'create']);
Route::post('/spesifikasi/store', [FiturController::class, 'store']);
Route::get('/spesifikasi/{id}/edit', [FiturController::class, 'edit']);
Route::put('/spesifikasi/{id}', [FiturController::class, 'update']); 
Route::delete('/spesifikasi/{id}', [FiturController::class, 'destroy']); 

Route::get('/spesifikasi/createPS', [FiturController::class, 'createPS']);
Route::post('/spesifikasi/storePS', [FiturController::class, 'storePS']);
Route::get('/spesifikasi/{id}/editPS', [FiturController::class, 'editPS']);
Route::put('/spesifikasi/{id}', [FiturController::class, 'updatePS']);
Route::delete('/spesifikasi/{id}', [FiturController::class, 'destroyPS']); 

Route::get('/preview', [App\Http\Controllers\PreviewController::class, 'index']); 
Route::get('/preview/create', [App\Http\Controllers\PreviewController::class, 'create']);
Route::post('/preview/store', [App\Http\Controllers\PreviewController::class, 'store']);
Route::get('/preview/{id}/edit', [App\Http\Controllers\PreviewController::class, 'edit']);
Route::put('/preview/{id}', [App\Http\Controllers\PreviewController::class, 'update']); 
Route::delete('/preview/{id}', [App\Http\Controllers\PreviewController::class, 'destroy']);

Route::get('/ringkasanLabview', [RingkasanController::class, 'indexLabview']);
Route::get('/ringkasan/createLabview', [RingkasanController::class, 'createLabview']);
Route::post('/ringkasan/storeLabview', [RingkasanController::class, 'storeLabview']);
Route::get('/ringkasanLabview/{id}/editLabview', [RingkasanController::class, 'editLabview']); 
Route::put('/ringkasanLabview/{id}', [RingkasanController::class, 'updateLabview']); 
Route::delete('/ringkasanLabview/{id}', [RingkasanController::class, 'destroyLabview']); 