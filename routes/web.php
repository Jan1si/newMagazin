<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryTableController;
use App\Http\Controllers\Admin\ProductTableController;
use App\Http\Controllers\Admin\RoleTableController;
use App\Http\Controllers\Admin\UserTableController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::post('/post', [EmailController::class, 'index'])->name('email');

Route::post('/register', [AuthController::class, 'registration'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/profile', [ProfileController::class, 'index'])->middleware('user')->name('profile');

Route::middleware('admin')->prefix('admin-panel')->group(function (){
    Route::get('/', [AdminController::class, 'index'])->name('tables');

    Route::resource('table-roles',RoleTableController::class);
    Route::resource('table-categories',CategoryTableController::class);
    Route::resource('table-products',ProductTableController::class);
    Route::resource('table-users',UserTableController::class);


});
