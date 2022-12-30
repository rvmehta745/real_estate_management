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

Route::prefix('admin')->group(function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/login',function(){
        return view('admin.login');
    })->name('login');

    Route::get('/register',function(){
        return view('admin.register');
    })->name('register');

    Route::get('/forgot-password',function(){
        return view('admin.forgot-password');
    })->name('forgot-password');

    Route::get('/reset-password',function(){
        return view('admin.reset-password');
    })->name('reset-password');

    Route::get('/datatable', function () {
        return view('admin.datatable');
    })->name('datatable');

});

Route::resource('users',App\Http\Controllers\UserController::class);
