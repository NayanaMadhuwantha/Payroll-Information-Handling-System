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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index']);
    Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'index']);
    Route::get('/advance', [App\Http\Controllers\AdvanceController::class, 'index']);
    Route::get('/allowance', [App\Http\Controllers\AllowanceController::class, 'index']);
    Route::get('/attendance', [App\Http\Controllers\AttendanceController::class, 'index']);
    Route::get('/deduction', [App\Http\Controllers\DeductionController::class, 'index']);
    Route::get('/leave', [App\Http\Controllers\LeaveController::class, 'index']);
    Route::get('/loan', [App\Http\Controllers\LoanController::class, 'index']);
    Route::get('/month-salary', [App\Http\Controllers\SalaryController::class, 'index']);
    Route::get('/employee-profile', [App\Http\Controllers\EmployeeProfileController::class, 'index']);
});
