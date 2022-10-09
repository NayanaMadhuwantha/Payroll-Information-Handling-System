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
    Route::post('/settings', [App\Http\Controllers\SettingsController::class, 'updatePassword'])->name('update.password');
    Route::post('/add-user', [App\Http\Controllers\SettingsController::class, 'addUser'])->name('add.user');
    Route::post('/update-grades', [App\Http\Controllers\SettingsController::class, 'updateGrades'])->name('update.grades');

    Route::get('/advance', [App\Http\Controllers\AdvanceController::class, 'index'])->name('advance');
    Route::post('/advance', [App\Http\Controllers\AdvanceController::class, 'store'])->name('advance.store');

    Route::get('/allowance', [App\Http\Controllers\AllowanceController::class, 'index'])->name('allowance');
    Route::post('/over-time', [App\Http\Controllers\OverTimeController::class, 'store'])->name('over-time.store');
    Route::post('/attendance-allowance', [App\Http\Controllers\AllowanceController::class, 'saveAttendanceAllowance'])->name('attendance-allowance.store');
    Route::post('/other-allowance', [App\Http\Controllers\AllowanceController::class, 'saveOtherAllowance'])->name('other-allowance.store');

    Route::get('/attendance', [App\Http\Controllers\AttendanceController::class, 'index'])->name('attendance');
    Route::post('/attendance', [App\Http\Controllers\AttendanceController::class, 'store'])->name('attendance.store');

    Route::get('/deduction', [App\Http\Controllers\DeductionController::class, 'index'])->name('deduction');
    Route::post('/deduction', [App\Http\Controllers\DeductionController::class, 'saveDeduction'])->name('deduction.store');
    Route::post('/absent', [App\Http\Controllers\DeductionController::class, 'saveAbsence'])->name('absent.store');
    Route::post('/food-deduction', [App\Http\Controllers\DeductionController::class, 'saveFoodDeduction'])->name('food-deduction.store');

    Route::get('/leave', [App\Http\Controllers\LeaveController::class, 'index'])->name('leave');
    Route::post('/leave', [App\Http\Controllers\LeaveController::class, 'store'])->name('leave.store');

    Route::get('/loan', [App\Http\Controllers\LoanController::class, 'index'])->name('loan');
    Route::post('/loan', [App\Http\Controllers\LoanController::class, 'store'])->name('loan.store');

    Route::get('/month-salary', [App\Http\Controllers\SalaryController::class, 'index'])->name('month-salary');
    Route::post('/month-salary', [App\Http\Controllers\SalaryController::class, 'store'])->name('month-salary.store');
    Route::get('/salary-slip', [App\Http\Controllers\SalaryController::class, 'salarySlip'])->name('salarySlip');

    Route::get('/employee-profile', [App\Http\Controllers\EmployeeProfileController::class, 'index'])->name('employee-profile.index');
    Route::get('/all-profiles', [App\Http\Controllers\EmployeeProfileController::class, 'allProfiles'])->name('employee-profile.allProfiles');
    Route::post('/employee-profile/{employee_id}', [App\Http\Controllers\EmployeeProfileController::class, 'update'])->name('employee-profile.update');

    Route::get('/all-reports', [App\Http\Controllers\ReportsController::class, 'index'])->name('reports');

    Route::get('/allowance-report', [App\Http\Controllers\ReportsController::class, 'allowanceReport'])->name('allowanceReport');
    Route::post('/allowance-report', [App\Http\Controllers\ReportsController::class, 'getAllowanceReport'])->name('allowanceReport.get');

    Route::get('/overtime-report', [App\Http\Controllers\ReportsController::class, 'overtimeReport'])->name('overtimeReport');
    Route::post('/overtime-report', [App\Http\Controllers\ReportsController::class, 'getOvertimeReport'])->name('overtimeReport.get');

    Route::get('/leave-report', [App\Http\Controllers\ReportsController::class, 'leaveReport'])->name('leaveReport');
    Route::post('/leave-report', [App\Http\Controllers\ReportsController::class, 'getLeaveReport'])->name('leaveReport.get');

    Route::get('/deduction-report', [App\Http\Controllers\ReportsController::class, 'deductionReport'])->name('deductionReport');
    Route::post('/deduction-report', [App\Http\Controllers\ReportsController::class, 'getDeductionReport'])->name('deductionReport.get');

    Route::get('/month-salary-report', [App\Http\Controllers\ReportsController::class, 'monthsalaryReport'])->name('monthsalaryReport');
    Route::get('/epf-etf-report', [App\Http\Controllers\ReportsController::class, 'epfetfReport'])->name('epfetfReport');
});
