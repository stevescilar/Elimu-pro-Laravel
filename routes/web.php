<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Setup\StudentClassController;
use App\Http\Controllers\Backend\Setup\StudentYearController;
use App\Http\Controllers\Backend\Setup\StudentGroupController;
use App\Http\Controllers\Backend\Setup\StudentShiftController;


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
/// user profile and password route.
Route::prefix('profile')->group(function(){
    Route::get('/view',[ProfileController::class,'ProfileView'])->name('profile.view');
    Route::get('/edit/{id}',[ProfileController::class,'ProfileEdit'])->name('profile.edit');
    Route::post('/store',[ProfileController::class,'ProfileStore'])->name('profile.store');   
    Route::get('/password/view',[ProfileController::class,'PasswordView'])->name('password.view');
    Route::post('/password/update',[ProfileController::class,'PasswordUpdate'])->name('password.update');
});

/// Setup Management routes 
Route::prefix('setups')->group(function(){

    Route::get('/student/class/view',[StudentClassController::class,'ViewStudent'])->name('student.class.view');
    Route::get('/student/class/add',[StudentClassController::class,'StudentClassAdd'])->name('student.class.add');
    Route::post('/student/class/store',[StudentClassController::class,'StudentClassStore'])->name('store.student.class');   
    Route::get('/student/class/edit/{id}',[StudentClassController::class,'StudentClassEdit'])->name('student.class.edit');  
    Route::post('/student/class/update/{id}',[StudentClassController::class,'StudentClassUpdate'])->name('student.class.update');
    Route::get('/student/class/delete/{id}',[StudentClassController::class,'ClassStudentDelete'])->name('student.class.delete');

    // student year route

    Route::get('/student/year/view',[StudentYearController::class,'ViewYear'])->name('student.year.view');
    Route::get('/student/year/add',[StudentYearController::class,'StudentYearAdd'])->name('student.year.add');
    Route::post('/student/year/store',[StudentYearController::class,'StudentYearStore'])->name('store.student.year');   
    Route::get('/student/year/edit/{id}',[StudentYearController::class,'StudentYearEdit'])->name('student.year.edit');  
    Route::post('/student/year/update/{id}',[StudentYearController::class,'StudentYearUpdate'])->name('student.year.update');
    Route::get('/student/year/delete/{id}',[StudentYearController::class,'YearStudentDelete'])->name('student.year.delete');

    // student group
    Route::get('/student/group/view',[StudentGroupController::class,'ViewGroup'])->name('student.group.view');
    Route::get('/student/group/add',[StudentGroupController::class,'StudentGroupAdd'])->name('student.group.add');
    Route::post('/student/group/store',[StudentGroupController::class,'StudentGroupStore'])->name('store.student.group');
    Route::get('/student/group/edit/{id}',[StudentGroupController::class,'StudentGroupEdit'])->name('student.group.edit');  
    Route::post('/student/group/update/{id}',[StudentGroupController::class,'StudentGroupUpdate'])->name('student.group.update');
    Route::get('/student/group/delete/{id}',[StudentGroupController::class,'GroupStudentDelete'])->name('student.group.delete');
    
    // shifts
    Route::get('/student/shift/view',[StudentShiftController::class,'ViewShift'])->name('student.shift.view');
    Route::get('/student/add/shift',[StudentShiftController::class,'AddShift'])->name('student.add.shift');
    Route::post('/student/shift/store',[StudentShiftController::class,'StoreShift'])->name('store.student.shift');
    Route::get('/student/shift/edit/{id}',[StudentShiftController::class,'StudentShiftEdit'])->name('student.shift.edit'); 
    Route::post('/student/shift/update/{id}',[StudentShiftController::class,'UpdateShift'])->name('student.shift.update');
    Route::get('/student/group/delete/{id}',[StudentShiftController::class,'DeleteShift'])->name('student.shift.delete');

    

});