<?php

use App\Http\Controllers\CustomerController;
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
Route::get('/',[CustomerController::class,'index'])->name('index');
Route::get('{id}/edit',[CustomerController::class,'edit'])->name('edit');
Route::get('/create',[CustomerController::class,'create'])->name('create');
//Route::get('{id}/delete',[CustomerController::class,'destroy'])->name('delete');
Route::get('/search',[CustomerController::class,'search'])->name('search');
Route::post('/store',[CustomerController::class,'store'])->name('store');
Route::post('/update',[CustomerController::class,'update'])->name('update');
