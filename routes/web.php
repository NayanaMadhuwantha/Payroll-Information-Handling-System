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

    Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings');
    Route::get('/advance', [App\Http\Controllers\AdvanceController::class, 'index'])->name('advance');
    Route::get('/allowance', [App\Http\Controllers\AllowanceController::class, 'index'])->name('allowance');
    Route::get('/attendance', [App\Http\Controllers\AttendanceController::class, 'index'])->name('attendance');
    Route::get('/deduction', [App\Http\Controllers\DeductionController::class, 'index'])->name('deduction');
    Route::get('/leave', [App\Http\Controllers\LeaveController::class, 'index'])->name('leave');
    Route::get('/loan', [App\Http\Controllers\LoanController::class, 'index'])->name('loan');
    Route::get('/month-salary', [App\Http\Controllers\SalaryController::class, 'index'])->name('month-salary');

    Route::get('/employee-profile', [App\Http\Controllers\EmployeeProfileController::class, 'index'])->name('employee-profile.index');
    Route::post('/employee-profile/{employee_id}', [App\Http\Controllers\EmployeeProfileController::class, 'update'])->name('employee-profile.update');
});
