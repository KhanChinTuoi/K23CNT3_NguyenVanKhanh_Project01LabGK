<?php

use App\Http\Controllers\NVKLOAISANPHAMController; 
use App\Http\Controllers\NVK_Quan_TriController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admins/nvk-login',[NVK_Quan_TriController::class,'nvkLogin'])->name('admins.nvkLogin');
Route::post('/admins/nvk-login',[NVK_Quan_TriController::class,'nvkLoginSubmit'])->name('admins.nvkLoginSubmit'); 

#Admin - row
Route::get('/nvk-admins',function(){
    return view('nvkAdmins.index');
});

Route::get('/nvk-admins/nvk-loai-san-pham',[NVKLOAISANPHAMController::class,'nvkList'])->name('nvkadmins.nvkloaisanpham');
Route::get('/nvk-admins/nvk-loai-san-pham/nvk-create',[NVKLOAISANPHAMController::class,'nvkCreate'])->name('nvkadmins.nvkloaisanpham.nvkcreate');
Route::post('/nvk-admins/nvk-loai-san-pham/nvk-create',[NVKLOAISANPHAMController::class,'nvkCreateSubmit'])->name('nvkadmins.nvkloaisanpham.nvkcreatesubmit');

#edit
Route::get('/nvk-admins/nvk-loai-san-pham/nvk-edit/{id}',[NVKLOAISANPHAMController::class,'nvkEdit'])->name('nvkadmins.nvkloaisanpham.nvkedit');
Route::post('/nvk-admins/nvk-loai-san-pham/nvk-edit',[NVKLOAISANPHAMController::class,'nvkEditSubmit'])->name('nvkadmins.nvkloaisanpham.nvkeditsubmit');

#delete
Route::get('/nvk-admins/nvk-loai-san-pham/nvk-delete/{id}',[NVKLOAISANPHAMController::class,'nvkDelete'])->name('nvkadmins.nvkloaisanpham.nvkdelete');
