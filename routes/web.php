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

Route::get('/', function(){
    return redirect(route('dashboard'));
})->name('index');
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/dashboard/flower/add' ,[App\Http\Controllers\FlowerController::class, 'add'])->name('flower.add');  
Route::post('/dashboard/flower/add' ,[App\Http\Controllers\FlowerController::class, 'store'])->name('flower.add');   

Route::get('/dashboard/flower/edit' ,[App\Http\Controllers\FlowerController::class, 'edit'])->name('flower.edit');  
Route::post('/dashboard/flower/edit' ,[App\Http\Controllers\FlowerController::class, 'update'])->name('flower.edit');      

Route::get('/dashboard/flower/delete/{id}' ,[App\Http\Controllers\FlowerController::class, 'delete'])->name('flower.delete');  

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
