<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;


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
    return view('auth.login');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

// admincontroller route
Route::get('/admin/logout',[AdminController::class,'Logout'])->name('admin.logout');

// User Management All Routes
// grouped routes
Route::prefix('users')->group(function(){

    Route::get('/view',[UserController::class,'UserView'])->name('user.view');
    Route::get('/add',[UserController::class,'AddUser'])->name('add.user');
    Route::post('/store',[UserController::class,'UserStore'])->name('users.store');
    Route::get('/edit/{id}',[UserController::class,'EditUser'])->name('users.edit');
    Route::post('/update/{id}',[UserController::class,'UpdateUser'])->name('users.update');
    Route::get('/delete/{id}',[UserController::class,'DeleteUser'])->name('users.delete');

   



});