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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('home');
Route::get('/advance', [App\Http\Controllers\AdvanceController::class, 'index'])->name('home');
Route::get('/allowance', [App\Http\Controllers\AllowanceController::class, 'index'])->name('home');
Route::get('/attendance', [App\Http\Controllers\AttendanceController::class, 'index'])->name('home');
Route::get('/deduction', [App\Http\Controllers\DeductionController::class, 'index'])->name('home');
Route::get('/leave', [App\Http\Controllers\LeaveController::class, 'index'])->name('home');
Route::get('/loan', [App\Http\Controllers\LoanController::class, 'index'])->name('home');
Route::get('/month-salary', [App\Http\Controllers\SalaryController::class, 'index'])->name('home');
Route::get('/employee-profile', [App\Http\Controllers\EmployeeProfileController::class, 'index'])->name('home');
