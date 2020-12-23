<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\employeeController;
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
    echo('Welcome to Job Portal');
});

Route::get('/login', [loginController::class,'index']);
Route::post('/login', [loginController::class,'verify']);
Route::get('/logout', [logoutController::class,'index']);

Route::group(['middleware'=>['session']], function(){

	Route::get('/adminhome', [adminController::class,'adminhome'])->name('admin.home');
	Route::get('/employeelist', [adminController::class,'employeelist'])->name('admin.employeelist');
	Route::get('/createemployee', [adminController::class,'create'])->name('admin.createemployee');
	Route::post('/createemployee', [adminController::class,'store']);
	Route::get('/editemployee/{id}', [adminController::class,'edit'])->name('admin.editemployee');
	Route::post('/editemployee/{id}', [adminController::class,'update']);
	Route::get('/deleteemployee/{id}', [adminController::class,'delete'])->name('admin.deleteemployee');
	Route::post('/deleteemployee/{id}', [adminController::class,'destroy']);


	Route::get('/employeehome', [employeeController::class,'employeehome'])->name('employee.home');
	Route::get('/joblist', [employeeController::class,'employeelist'])->name('employee.joblist');
	Route::get('/createjob', [employeeController::class,'create'])->name('employee.createjob');
	Route::post('/createjob', [employeeController::class,'store']);
	Route::get('/editjob/{id}', [employeeController::class,'edit'])->name('employee.editjob');
	Route::post('/editjob/{id}', [employeeController::class,'update']);
	Route::get('/deletejob/{id}', [employeeController::class,'delete'])->name('employee.deletejob');
	Route::post('/deletejob/{id}', [employeeController::class,'destroy']);

});