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
    #return view('welcome');
    return redirect()->route('signin');
});

Route::middleware('guest')->group(function (){
    Route::get('register-me', [\App\Http\Controllers\AccountController::class, 'create'])->name('register');
    Route::post('register', [\App\Http\Controllers\AccountController::class, 'store'])->name('registerUser');

    Route::get('sign-in', [\App\Http\Controllers\AuthController::class, 'signin'])->name('signin');
    Route::post('authorize', [\App\Http\Controllers\AuthController::class, 'authorizeGuest'])->name('authorize');
});

Route::middleware('auth')->group(function(){
    Route::post('sign-out', [\App\Http\Controllers\AuthController::class, 'signout'])->name('signout');

    /*
     * Employee Routes
     */
    Route::get('employee/create', [\App\Http\Controllers\User\EmployeeController::class, 'create'])->name('createEmployee');
    Route::post('employee/store', [\App\Http\Controllers\User\EmployeeController::class, 'store'])->name('storeEmployee');

    /*
     * Project Routes
     */
    Route::get('projects', [\App\Http\Controllers\User\ProjectController::class, 'index'])->name('projectIndex');
    Route::post('project/store', [\App\Http\Controllers\User\ProjectController::class, 'store'])->name('storeProject');
});
