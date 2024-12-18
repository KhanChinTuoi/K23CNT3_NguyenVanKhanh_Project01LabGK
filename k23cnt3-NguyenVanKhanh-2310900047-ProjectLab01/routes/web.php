<?php

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
