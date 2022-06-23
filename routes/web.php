<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RingkasanController;
use App\Http\Controllers\SpesifikasiController;
use App\Http\Controllers\PreviewController;
use App\Http\Controllers\FileDownloadController;
use App\Http\Controllers\ControllerMathematica;
use App\Http\Controllers\ControllerMinitab;
use App\Http\Controllers\ControllerLabview;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::get('/backend', function () {
    return view('layouts.backend');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/authenticate', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// auth: admin || user
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);

        //adobe
        Route::get('/admin/adobe/ringkasan', [RingkasanController::class, 'index']); 
        Route::get('/admin/adobe/ringkasan/create', [RingkasanController::class, 'create']);
        Route::post('/admin/adobe/ringkasan/store', [RingkasanController::class, 'store']);
        Route::get('/admin/adobe/ringkasan/edit/{id}', [RingkasanController::class, 'edit']); 
        Route::put('/admin/adobe/ringkasan/update/{id}', [RingkasanController::class, 'update']); 
        Route::delete('/admin/adobe/ringkasan/destroy/{id}', [RingkasanController::class, 'destroy']); 
        
        Route::get('/admin/adobe/filedownload', [FileDownloadController::class, 'index']); 
        Route::get('/admin/adobe/filedownload/create', [FileDownloadController::class, 'create']);
        Route::post('/admin/adobe/filedownload/store', [FileDownloadController::class, 'store']);
        Route::get('/admin/adobe/filedownload/edit/{id}', [FileDownloadController::class, 'edit']);
        Route::put('/admin/adobe/filedownload/update/{id}', [FileDownloadController::class, 'update']); 
        Route::delete('/admin/adobe/filedownload/destroy/{id}', [FileDownloadController::class, 'destroy']);

        Route::get('/admin/adobe/spesifikasi', [SpesifikasiController::class, 'index']); 
        Route::get('/admin/adobe/spesifikasi/create', [SpesifikasiController::class, 'create']);
        Route::post('/admin/adobe/spesifikasi/store', [SpesifikasiController::class, 'store']);
        Route::get('/admin/adobe/spesifikasi/edit/{id}', [SpesifikasiController::class, 'edit']);
        Route::put('/admin/adobe/spesifikasi/update/{id}', [SpesifikasiController::class, 'update']); 
        Route::delete('/admin/adobe/spesifikasi/destroy/{id}', [SpesifikasiController::class, 'destroy']); 

        Route::get('/admin/adobe/spesifikasi/createPS', [SpesifikasiController::class, 'createPS']);
        Route::post('/admin/adobe/spesifikasi/storePS', [SpesifikasiController::class, 'storePS']);
        Route::get('/admin/adobe/spesifikasi/editPS/{id}', [SpesifikasiController::class, 'editPS']);
        Route::put('/admin/adobe/spesifikasi/updatePS/{id}', [SpesifikasiController::class, 'updatePS']);
        Route::delete('/admin/adobe/spesifikasi/destroyPS/{id}', [SpesifikasiController::class, 'destroyPS']); 

        Route::get('/admin/adobe/preview', [PreviewController::class, 'index']); 
        Route::get('/admin/adobe/preview/create', [PreviewController::class, 'create']);
        Route::post('/admin/adobe/preview/store', [PreviewController::class, 'store']);
        Route::get('/admin/adobe/preview/edit/{id}', [PreviewController::class, 'edit']);
        Route::put('/admin/adobe/preview/update/{id}', [PreviewController::class, 'update']); 
        Route::delete('/admin/adobe/preview/destroy/{id}', [PreviewController::class, 'destroy']);

 

        //matlab
        Route::get('/admin/matlab/ringkasanMatlab', [RingkasanController::class, 'indexMatlab']);
        Route::get('/admin/matlab/ringkasanMatlab/createMatlab', [RingkasanController::class, 'createMatlab']);
        Route::post('/admin/matlab/ringkasanMatlab/storeMatlab', [RingkasanController::class, 'storeMatlab']);
        Route::get('/admin/matlab/ringkasanMatlab/editMatlab/{id}', [RingkasanController::class, 'editMatlab']); 
        Route::put('/admin/matlab/ringkasanMatlab/updateMatlab/{id}', [RingkasanController::class, 'updateMatlab']); 
        Route::delete('/admin/matlab/ringkasanMatlab/destroyMatlab/{id}', [RingkasanController::class, 'destroyMatlab']); 

        Route::get('/admin/matlab/filedownloadMatlab', [FileDownloadController::class, 'indexMatlab']); 
        Route::get('/admin/matlab/filedownloadMatlab/createMatlab', [FileDownloadController::class, 'createMatlab']);
        Route::post('/admin/matlab/filedownloadMatlab/storeMatlab', [FileDownloadController::class, 'storeMatlab']);
        Route::get('/admin/matlab/filedownloadMatlab/editMatlab/{id}', [FileDownloadController::class, 'editMatlab']);
        Route::put('/admin/matlab/filedownloadMatlab/updateMatlab/{id}', [FileDownloadController::class, 'updateMatlab']); 
        Route::delete('/admin/matlab/filedownloadMatlab/destroyMatlab/{id}', [FileDownloadController::class, 'destroyMatlab']);

        Route::get('/admin/matlab/spesifikasiMatlab', [SpesifikasiController::class, 'indexMatlab']);
        Route::get('/admin/matlab/spesifikasiMatlab/createMatlab', [SpesifikasiController::class, 'createMatlab']);
        Route::post('/admin/matlab/spesifikasiMatlab/storeMatlab', [SpesifikasiController::class, 'storeMatlab']);
        Route::get('/admin/matlab/spesifikasiMatlab/editMatlab/{id}', [SpesifikasiController::class, 'editMatlab']); 
        Route::put('/admin/matlab/spesifikasiMatlab/updateMatlab/{id}', [SpesifikasiController::class, 'updateMatlab']); 
        Route::delete('/admin/matlab/spesifikasiMatlab/destroyMatlab/{id}', [SpesifikasiController::class, 'destroyMatlab']);

        Route::get('/admin/matlab/previewMatlab', [PreviewController::class, 'indexMatlab']); 
        Route::get('/admin/matlab/previewMatlab/createMatlab', [PreviewController::class, 'createMatlab']);
        Route::post('/admin/matlab/previewMatlab/storeMatlab', [PreviewController::class, 'storeMatlab']);
        Route::get('/admin/matlab/previewMatlab/editMatlab/{id}', [PreviewController::class, 'editMatlab']);
        Route::put('/admin/matlab/previewMatlab/updateMatlab/{id}', [PreviewController::class, 'updateMatlab']); 
        Route::delete('/admin/matlab/previewMatlab/destroyMatlab/{id}', [PreviewController::class, 'destroyMatlab']);


        //mathematica
        Route::get('/admin/mathematica/ringkasanMathematica', [RingkasanController::class, 'indexMathematica']);
        Route::get('/admin/mathematica/ringkasanMathematica/createMathematica', [RingkasanController::class, 'createMathematica']);
        Route::post('/admin/mathematica/ringkasanMathematica/storeMathematica', [RingkasanController::class, 'storeMathematica']);
        Route::get('/admin/mathematica/ringkasanMathematica/editMathematica/{id}', [RingkasanController::class, 'editMathematica']); 
        Route::put('/admin/mathematica/ringkasanMathematica/updateMathematica/{id}', [RingkasanController::class, 'updateMathematica']); 
        Route::delete('/admin/mathematica/ringkasanMathematica/destroyMathematica/{id}', [RingkasanController::class, 'destroyMathematica']); 

        Route::get('/admin/mathematica/filedownloadMathematica', [FileDownloadController::class, 'indexMathematica']); 
        Route::get('/admin/mathematica/filedownloadMathematica/createMathematica', [FileDownloadController::class, 'createMathematica']);
        Route::post('/admin/mathematica/filedownloadMathematica/storeMathematica', [FileDownloadController::class, 'storeMathematica']);
        Route::get('/admin/mathematica/filedownloadMathematica/editMathematica/{id}', [FileDownloadController::class, 'editMathematica']);
        Route::put('/admin/mathematica/filedownloadMathematica/updateMathematica/{id}', [FileDownloadController::class, 'updateMathematica']); 
        Route::delete('/admin/mathematica/filedownloadMathematica/destroyMathematica/{id}', [FileDownloadController::class, 'destroyMathematica']);

        Route::get('/admin/mathematica/filedownloadMathematica/createMathematicaFI', [FileDownloadController::class, 'createMathematicaFI']);
        Route::post('/admin/mathematica/filedownloadMathematica/storeMathematicaFI', [FileDownloadController::class, 'storeMathematicaFI']);
        Route::get('/admin/mathematica/filedownloadMathematica/editMathematicaFI/{id}', [FileDownloadController::class, 'editMathematicaFI']);
        Route::put('/admin/mathematica/filedownloadMathematica/updateMathematicaFI/{id}', [FileDownloadController::class, 'updateMathematicaFI']); 
        Route::delete('/admin/mathematica/filedownloadMathematica/destroyMathematicaFI/{id}', [FileDownloadController::class, 'destroyMathematicaFI']);

        Route::get('/admin/mathematica/spesifikasiMathematica', [SpesifikasiController::class, 'indexMathematica']);
        Route::get('/admin/mathematica/spesifikasiMathematica/createMathematica', [SpesifikasiController::class, 'createMathematica']);
        Route::post('/admin/mathematica/spesifikasiMathematica/storeMathematica', [SpesifikasiController::class, 'storeMathematica']);
        Route::get('/admin/mathematica/spesifikasiMathematica/editMathematica/{id}', [SpesifikasiController::class, 'editMathematica']); 
        Route::put('/admin/mathematica/spesifikasiMathematica/updateMathematica/{id}', [SpesifikasiController::class, 'updateMathematica']); 
        Route::delete('/admin/mathematica/spesifikasiMathematica/destroyMathematica/{id}', [SpesifikasiController::class, 'destroyMathematica']);

        Route::get('/admin/mathematica/spesifikasiMathematica/createMathematicaPS', [SpesifikasiController::class, 'createMathematicaPS']);
        Route::post('/admin/mathematica/spesifikasiMathematica/storeMathematicaPS', [SpesifikasiController::class, 'storeMathematicaPS']);
        Route::get('/admin/mathematica/spesifikasiMathematica/editMathematicaPS/{id}', [SpesifikasiController::class, 'editMathematicaPS']); 
        Route::put('/admin/mathematica/spesifikasiMathematica/updateMathematicaPS/{id}', [SpesifikasiController::class, 'updateMathematicaPS']); 
        Route::delete('/admin/mathematica/spesifikasiMathematica/destroyMathematicaPS/{id}', [SpesifikasiController::class, 'destroyMathematicaPS']);

        Route::get('/admin/mathematica/previewMathematica', [PreviewController::class, 'indexMathematica']); 
        Route::get('/admin/mathematica/previewMathematica/createMathematica', [PreviewController::class, 'createMathematica']);
        Route::post('/admin/mathematica/previewMathematica/storeMathematica', [PreviewController::class, 'storeMathematica']);
        Route::get('/admin/mathematica/previewMathematica/editMathematica/{id}', [PreviewController::class, 'editMathematica']);
        Route::put('/admin/mathematica/previewMathematica/updateMathematica/{id}', [PreviewController::class, 'updateMathematica']); 
        Route::delete('/admin/mathematica/previewMathematica/destroyMathematica/{id}', [PreviewController::class, 'destroyMathematica']);


        //labview
        Route::get('/admin/labview/ringkasanLabview', [RingkasanController::class, 'indexLabview']);
        Route::get('/ringkasanLabview/createLabview', [RingkasanController::class, 'createLabview']);
        Route::post('/ringkasanLabview/storeLabview', [RingkasanController::class, 'storeLabview']);
        Route::get('/ringkasanLabview/{id}/editLabview', [RingkasanController::class, 'editLabview']); 
        Route::put('/ringkasanLabview/{id}', [RingkasanController::class, 'updateLabview']); 
        Route::delete('/ringkasanLabview/{id}', [RingkasanController::class, 'destroyLabview']); 

        Route::get('/admin/labview/filedownloadLabview', [FileDownloadController::class, 'indexLabview']); 
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

        Route::get('/admin/labview/spesifikasiLabview', [SpesifikasiController::class, 'indexLabview']);
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

        Route::get('/admin/labview/previewLabview', [PreviewController::class, 'indexLabview']); 
        Route::get('/previewLabview/createLabview', [PreviewController::class, 'createLabview']);
        Route::post('/previewLabview/storeLabview', [PreviewController::class, 'storeLabview']);
        Route::get('/previewLabview/editLabview/{id}', [PreviewController::class, 'editLabview']);
        Route::put('/previewLabview/updateLabview/{id}', [PreviewController::class, 'updateLabview']); 
        Route::delete('/previewLabview/destroyLabview/{id}', [PreviewController::class, 'destroyLabview']);


        //minitab
        Route::get('/admin/minitab/ringkasanMinitab', [RingkasanController::class, 'indexMinitab']);
        Route::get('/ringkasanMinitab/createMinitab', [RingkasanController::class, 'createMinitab']);
        Route::post('/ringkasanMinitab/storeMinitab', [RingkasanController::class, 'storeMinitab']);
        Route::get('/ringkasanMinitab/editMinitab/{id}', [RingkasanController::class, 'editMinitab']); 
        Route::put('/ringkasanMinitab/updateMinitab/{id}', [RingkasanController::class, 'updateMinitab']); 
        Route::delete('/ringkasanMinitab/destroyMinitab/{id}', [RingkasanController::class, 'destroyMinitab']); 

        Route::get('/admin/minitab/filedownloadMinitab', [FileDownloadController::class, 'indexMinitab']); 
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


        Route::get('/admin/minitab/spesifikasiMinitab', [SpesifikasiController::class, 'indexMinitab']);
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

        Route::get('/admin/minitab/previewMinitab', [PreviewController::class, 'indexMinitab']); 
        Route::get('/previewMinitab/createMinitab', [PreviewController::class, 'createMinitab']);
        Route::post('/previewMinitab/storeMinitab', [PreviewController::class, 'storeMinitab']);
        Route::get('/previewMinitab/editMinitab/{id}', [PreviewController::class, 'editMinitab']);
        Route::put('/previewMinitab/updateMinitab/{id}', [PreviewController::class, 'updateMinitab']); 
        Route::delete('/previewMinitab/destroyMinitab/{id}', [PreviewController::class, 'destroyMinitab']);

        

    });

    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('produk', UserController::class);
        Route::get('/mathematica', [UserController::class, 'indexMathematica']);
        Route::get('/minitab', [UserController::class, 'indexMinitab']);
        Route::get('/labview', [UserController::class, 'indexLabview']);
        Route::get('/downloadPanduan/{id}', [UserController::class, 'getDownloadPanduan']);
        Route::get('/downloadInstaller/{id}', [UserController::class, 'getDownloadInstaller']);
        Route::get('/matlab', [UserController::class, 'indexMatlab']);
        Route::get('/preVieww', [UserController::class, 'indexPreview']);
        Route::get('/adobe', [UserController::class, 'indexAdobe']);
    });
}); 
