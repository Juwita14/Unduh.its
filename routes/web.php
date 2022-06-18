<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RingkasanController;
use App\Http\Controllers\SpesifikasiController;
use App\Http\Controllers\PreviewController;
use App\Http\Controllers\FileDownloadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

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
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/login', [LoginController::class, 'index']); 
// Route::post('/login/authenticate', [LoginController::class, 'authenticate']); 

// Route::group(['middleware'=> ['auth', 'level:admin']], function () {
  
//     Route::get('/index', [HomeController::class, 'index'])->name('index');
// });
// Route::group(['middleware'=> ['auth', 'level:user']], function () {
  
//     Route::get('/index', [HomeController::class, 'index'])->name('index');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('index', function () {
    return view('index');
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

Route::get('/spesifikasi', [SpesifikasiController::class, 'index']); 
Route::get('/spesifikasi/create', [SpesifikasiController::class, 'create']);
Route::post('/spesifikasi/store', [SpesifikasiController::class, 'store']);
Route::get('/spesifikasi/edit/{id}', [SpesifikasiController::class, 'edit']);
Route::put('/spesifikasi/update/{id}', [SpesifikasiController::class, 'update']); 
Route::delete('/spesifikasi/destroy/{id}', [SpesifikasiController::class, 'destroy']); 

Route::get('/spesifikasi/createPS', [SpesifikasiController::class, 'createPS']);
Route::post('/spesifikasi/storePS', [SpesifikasiController::class, 'storePS']);
Route::get('/spesifikasi/editPS/{id}', [SpesifikasiController::class, 'editPS']);
Route::put('/spesifikasi/updatePS/{id}', [SpesifikasiController::class, 'updatePS']);
Route::delete('/spesifikasi/destroyPS/{id}', [SpesifikasiController::class, 'destroyPS']); 

Route::get('/preview', [PreviewController::class, 'index']); 
Route::get('/preview/create', [PreviewController::class, 'create']);
Route::post('/preview/store', [PreviewController::class, 'store']);
Route::get('/preview/{id}/edit', [PreviewController::class, 'edit']);
Route::put('/preview/{id}', [PreviewController::class, 'update']); 
Route::delete('/preview/{id}', [PreviewController::class, 'destroy']);


// User
Route::get('/labview', [RingkasanController::class, 'indexLabviewUser']);

Route::get('/ringkasanLabview', [RingkasanController::class, 'indexLabview']);
Route::get('/ringkasanLabview/createLabview', [RingkasanController::class, 'createLabview']);
Route::post('/ringkasanLabview/storeLabview', [RingkasanController::class, 'storeLabview']);
Route::get('/ringkasanLabview/{id}/editLabview', [RingkasanController::class, 'editLabview']); 
Route::put('/ringkasanLabview/{id}', [RingkasanController::class, 'updateLabview']); 
Route::delete('/ringkasanLabview/{id}', [RingkasanController::class, 'destroyLabview']); 

Route::get('/spesifikasiLabview', [SpesifikasiController::class, 'indexLabview']);
Route::get('/spesifikasiLabview/createLabview', [SpesifikasiController::class, 'createLabview']);
Route::post('/spesifikasiLabview/storeLabview', [SpesifikasiController::class, 'storeLabview']);
Route::get('/spesifikasiLabview/editLabview/{id}', [SpesifikasiController::class, 'editLabview']); 
Route::put('/spesifikasiLabview/updateLabview/{id}', [SpesifikasiController::class, 'updateLabview']); 
Route::delete('/spesifikasiLabview/destroyLabview/{id}', [SpesifikasiController::class, 'destroyLabview']);

Route::get('/spesifikasiLabview/createLabviewPS', [SpesifikasiController::class, 'createLabviewPS']);
Route::post('/spesifikasiLabview/storeLabviewPS', [SpesifikasiController::class, 'storeLabviewPS']);
Route::get('/spesifikasiLabview/editLabviewPS/{id}', [SpesifikasiController::class, 'editLabviewPS']); 
Route::put('/spesifikasiLabview/updateLabviewPS/{id}', [SpesifikasiController::class, 'updateLabviewPS']); 
Route::delete('/spesifikasiLabview/destroyLabviewPS/{id}', [SpesifikasiController::class, 'destroyLabviewPS']);

Route::get('/previewLabview', [PreviewController::class, 'indexLabview']); 
Route::get('/previewLabview/createLabview', [PreviewController::class, 'createLabview']);
Route::post('/previewLabview/storeLabview', [PreviewController::class, 'storeLabview']);
Route::get('/previewLabview/editLabview/{id}', [PreviewController::class, 'editLabview']);
Route::put('/previewLabview/updateLabview/{id}', [PreviewController::class, 'updateLabview']); 
Route::delete('/previewLabview/destroyLabview/{id}', [PreviewController::class, 'destroyLabview']);

// User
Route::get('/minitab', [RingkasanController::class, 'indexMinitabUser']);

Route::get('/ringkasanMinitab', [RingkasanController::class, 'indexMinitab']);
Route::get('/ringkasanMinitab/createMinitab', [RingkasanController::class, 'createMinitab']);
Route::post('/ringkasanMinitab/storeMinitab', [RingkasanController::class, 'storeMinitab']);
Route::get('/ringkasanMinitab/editMinitab/{id}', [RingkasanController::class, 'editMinitab']); 
Route::put('/ringkasanMinitab/updateMinitab/{id}', [RingkasanController::class, 'updateMinitab']); 
Route::delete('/ringkasanMinitab/destroyMinitab/{id}', [RingkasanController::class, 'destroyMinitab']); 

Route::get('/spesifikasiMinitab', [SpesifikasiController::class, 'indexMinitab']);
Route::get('/spesifikasiMinitab/createMinitab', [SpesifikasiController::class, 'createMinitab']);
Route::post('/spesifikasiMinitab/storeMinitab', [SpesifikasiController::class, 'storeMinitab']);
Route::get('/spesifikasiMinitab/editMinitab/{id}', [SpesifikasiController::class, 'editMinitab']); 
Route::put('/spesifikasiMinitab/updateMinitab/{id}', [SpesifikasiController::class, 'updateMinitab']); 
Route::delete('/spesifikasiMinitab/destroyMinitab/{id}', [SpesifikasiController::class, 'destroyMinitab']);

Route::get('/spesifikasiMinitab/createMinitabPS', [SpesifikasiController::class, 'createMinitabPS']);
Route::post('/spesifikasiMinitab/storeMinitabPS', [SpesifikasiController::class, 'storeMinitabPS']);
Route::get('/spesifikasiMinitab/editMinitabPS/{id}', [SpesifikasiController::class, 'editMinitabPS']); 
Route::put('/spesifikasiMinitab/updateMinitabPS/{id}', [SpesifikasiController::class, 'updateMinitabPS']); 
Route::delete('/spesifikasiMinitab/destroyMinitabPS/{id}', [SpesifikasiController::class, 'destroyMinitabPS']);

Route::get('/previewMinitab', [PreviewController::class, 'indexMinitab']); 
Route::get('/previewMinitab/createMinitab', [PreviewController::class, 'createMinitab']);
Route::post('/previewMinitab/storeMinitab', [PreviewController::class, 'storeMinitab']);
Route::get('/previewMinitab/editMinitab/{id}', [PreviewController::class, 'editMinitab']);
Route::put('/previewMinitab/updateMinitab/{id}', [PreviewController::class, 'updateMinitab']); 
Route::delete('/previewMinitab/destroyMinitab/{id}', [PreviewController::class, 'destroyMinitab']);

// User
Route::get('/mathematica', [RingkasanController::class, 'indexMathematicaUser']);

Route::get('/ringkasanMathematica', [RingkasanController::class, 'indexMathematica']);
Route::get('/ringkasanMathematica/createMathematica', [RingkasanController::class, 'createMathematica']);
Route::post('/ringkasanMathematica/storeMathematica', [RingkasanController::class, 'storeMathematica']);
Route::get('/ringkasanMathematica/editMathematica/{id}', [RingkasanController::class, 'editMathematica']); 
Route::put('/ringkasanMathematica/updateMathematica/{id}', [RingkasanController::class, 'updateMathematica']); 
Route::delete('/ringkasanMathematica/destroyMathematica/{id}', [RingkasanController::class, 'destroyMathematica']); 

Route::get('/spesifikasiMathematica', [SpesifikasiController::class, 'indexMathematica']);
Route::get('/spesifikasiMathematica/createMathematica', [SpesifikasiController::class, 'createMathematica']);
Route::post('/spesifikasiMathematica/storeMathematica', [SpesifikasiController::class, 'storeMathematica']);
Route::get('/spesifikasiMathematica/editMathematica/{id}', [SpesifikasiController::class, 'editMathematica']); 
Route::put('/spesifikasiMathematica/updateMathematica/{id}', [SpesifikasiController::class, 'updateMathematica']); 
Route::delete('/spesifikasiMathematica/destroyMathematica/{id}', [SpesifikasiController::class, 'destroyMathematica']);

Route::get('/spesifikasiMathematica/createMathematicaPS', [SpesifikasiController::class, 'createMathematicaPS']);
Route::post('/spesifikasiMathematica/storeMathematicaPS', [SpesifikasiController::class, 'storeMathematicaPS']);
Route::get('/spesifikasiMathematica/editMathematicaPS/{id}', [SpesifikasiController::class, 'editMathematicaPS']); 
Route::put('/spesifikasiMathematica/updateMathematicaPS/{id}', [SpesifikasiController::class, 'updateMathematicaPS']); 
Route::delete('/spesifikasiMathematica/destroyMathematicaPS/{id}', [SpesifikasiController::class, 'destroyMathematicaPS']);

Route::get('/previewMathematica', [PreviewController::class, 'indexMathematica']); 
Route::get('/previewMathematica/createMathematica', [PreviewController::class, 'createMathematica']);
Route::post('/previewMathematica/storeMathematica', [PreviewController::class, 'storeMathematica']);
Route::get('/previewMathematica/editMathematica/{id}', [PreviewController::class, 'editMathematica']);
Route::put('/previewMathematica/updateMathematica/{id}', [PreviewController::class, 'updateMathematica']); 
Route::delete('/previewMathematica/destroyMathematica/{id}', [PreviewController::class, 'destroyMathematica']);

Route::get('/filedownload', [FileDownloadController::class, 'index']); 
Route::get('/filedownload/create', [FileDownloadController::class, 'create']);
Route::post('/filedownload/store', [FileDownloadController::class, 'store']);
Route::get('/filedownload/edit/{id}', [FileDownloadController::class, 'edit']);
Route::put('/filedownload/update/{id}', [FileDownloadController::class, 'update']); 
Route::delete('/filedownload/destroy/{id}', [FileDownloadController::class, 'destroy']);

Route::get('/filedownloadMathematica', [FileDownloadController::class, 'indexMathematica']); 
Route::get('/filedownloadMathematica/createMathematica', [FileDownloadController::class, 'createMathematica']);
Route::post('/filedownloadMathematica/storeMathematica', [FileDownloadController::class, 'storeMathematica']);
Route::get('/filedownloadMathematica/editMathematica/{id}', [FileDownloadController::class, 'editMathematica']);
Route::put('/filedownloadMathematica/updateMathematica/{id}', [FileDownloadController::class, 'updateMathematica']); 
Route::delete('/filedownloadMathematica/destroyMathematica/{id}', [FileDownloadController::class, 'destroyMathematica']);

Route::get('/filedownloadMathematica/createMathematicaFI', [FileDownloadController::class, 'createMathematicaFI']);
Route::post('/filedownloadMathematica/storeMathematicaFI', [FileDownloadController::class, 'storeMathematicaFI']);
Route::get('/filedownloadMathematica/editMathematicaFI/{id}', [FileDownloadController::class, 'editMathematicaFI']);
Route::put('/filedownloadMathematica/updateMathematicaFI/{id}', [FileDownloadController::class, 'updateMathematicaFI']); 
Route::delete('/filedownloadMathematica/destroyMathematicaFI/{id}', [FileDownloadController::class, 'destroyMathematicaFI']);

Route::get('/filedownloadLabview', [FileDownloadController::class, 'indexLabview']); 
Route::get('/filedownloadLabview/createLabview', [FileDownloadController::class, 'createLabview']);
Route::post('/filedownloadLabview/storeLabview', [FileDownloadController::class, 'storeLabview']);
Route::get('/filedownloadLabview/editLabview/{id}', [FileDownloadController::class, 'editLabview']);
Route::put('/filedownloadLabview/updateLabview/{id}', [FileDownloadController::class, 'updateLabview']); 
Route::delete('/filedownloadLabview/destroyLabview/{id}', [FileDownloadController::class, 'destroyLabview']);

Route::get('/filedownloadLabview/createLabviewFI', [FileDownloadController::class, 'createLabviewFI']);
Route::post('/filedownloadLabview/storeLabviewFI', [FileDownloadController::class, 'storeLabviewFI']);
Route::get('/filedownloadLabview/editLabviewFI/{id}', [FileDownloadController::class, 'editLabviewFI']);
Route::put('/filedownloadLabview/updateLabviewFI/{id}', [FileDownloadController::class, 'updateLabviewFI']); 
Route::delete('/filedownloadLabview/destroyLabviewFI/{id}', [FileDownloadController::class, 'destroyLabviewFI']);

Route::get('/filedownloadMinitab', [FileDownloadController::class, 'indexMinitab']); 
Route::get('/filedownloadMinitab/createMinitab', [FileDownloadController::class, 'createMinitab']);
Route::post('/filedownloadMinitab/storeMinitab', [FileDownloadController::class, 'storeMinitab']);
Route::get('/filedownloadMinitab/editMinitab/{id}', [FileDownloadController::class, 'editMinitab']);
Route::put('/filedownloadMinitab/updateMinitab/{id}', [FileDownloadController::class, 'updateMinitab']); 
Route::delete('/filedownloadMinitab/destroyMinitab/{id}', [FileDownloadController::class, 'destroyMinitab']);

Route::get('/filedownloadMinitab/createMinitabFI', [FileDownloadController::class, 'createMinitabFI']);
Route::post('/filedownloadMinitab/storeMinitabFI', [FileDownloadController::class, 'storeMinitabFI']);
Route::get('/filedownloadMinitab/editMinitabFI/{id}', [FileDownloadController::class, 'editMinitabFI']);
Route::put('/filedownloadMinitab/updateMinitabFI/{id}', [FileDownloadController::class, 'updateMinitabFI']); 
Route::delete('/filedownloadMinitab/destroyMinitabFI/{id}', [FileDownloadController::class, 'destroyMinitabFI']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
