<?php

namespace App\Http\Controllers;

use App\Models\Allowance;
use App\Models\AllowanceType;
use App\Models\Deduction;
use App\Models\Leave;
use App\Models\OverTime;
use App\Models\Salary;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index(){
        return view('pages.reports.index');
    }


    public function allowanceReport(){
        return view('pages.reports.allowanceReport');
    }

    public function getAllowanceReport(Request $request){
        $month = $request->input('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');

        $users = User::getAllUsers();
        foreach ($users as $user){
            $user->attendance_allowances = Allowance::where('allowance_types.name','LIKE','%attendance%')
                ->where('allowances.month',$month)
                ->where('user_id',$user->id)
                ->join('allowance_types','allowance_types.id','=','allowances.allowance_type_id')
                ->pluck('allowance_amount')
                ->sum();

            $user->other_allowances = Allowance::where('allowance_types.name','LIKE','%other%')
                ->where('allowances.month',$month)
                ->where('user_id',$user->id)
                ->join('allowance_types','allowance_types.id','=','allowances.allowance_type_id')
                ->pluck('allowance_amount')
                ->sum();

            $user->total_allowances = Allowance::where('allowances.month',$month)
                ->where('user_id',$user->id)
                ->pluck('allowance_amount')
                ->sum();
        }

        return view('pages.reports.allowanceReport')->with([
            'users' => $users,
            'month_name' => $monthName
        ]);
    }


    public function overtimeReport(){
        return view('pages.reports.overtimeReport');
    }

    public function getOvertimeReport(Request $request){
        $month = $request->input('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');

        $users = User::getAllUsers();

        $totals['normal_ot_hours'] = 0;
        $totals['normal_ot_amount'] = 0;
        $totals['double_ot_hours'] = 0;
        $totals['double_ot_amount'] = 0;
        $totals['total_ot_amount'] = 0;

        foreach ($users as $user){
            $user->normal_ot_hours = OverTime::where('month',$month)
                ->where('user_id',$user->id)
                ->pluck('normal_ot_hours')
                ->sum();

            $user->normal_ot_amount = OverTime::where('month',$month)
                ->where('user_id',$user->id)
                ->pluck('normal_ot_amount')
                ->sum();

            $user->double_ot_hours = OverTime::where('month',$month)
                ->where('user_id',$user->id)
                ->pluck('double_ot_hours')
                ->sum();

            $user->double_ot_amount = OverTime::where('month',$month)
                ->where('user_id',$user->id)
                ->pluck('double_ot_amount')
                ->sum();

            $user->total_ot_amount = $user->normal_ot_amount + $user->double_ot_amount;

            $totals['normal_ot_hours'] += $user->normal_ot_hours;
            $totals['normal_ot_amount'] += $user->normal_ot_amount;
            $totals['double_ot_hours'] += $user->double_ot_hours;
            $totals['double_ot_amount'] += $user->double_ot_amount;
            $totals['total_ot_amount'] += $user->normal_ot_amount+$user->double_ot_amount;
        }

        return view('pages.reports.overtimeReport')->with([
            'users' => $users,
            'month_name' => $monthName,
            'totals' => $totals
        ]);
    }


    public function leaveReport(){
        return view('pages.reports.leaveReport');
    }

    public function getLeaveReport(Request $request){
        $month = $request->input('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');

        $users = User::getAllUsers();

        foreach ($users as $user){
            $user->annual_leaves = Leave::where('leave_types.name','LIKE','%annual%')
                ->whereMonth('leaves.created_at', $month)
                ->where('user_id',$user->id)
                ->join('leave_types','leave_types.id','=','leaves.leave_type_id')
                ->pluck('no_of_days')
                ->sum();

            $user->casual_leaves = Leave::where('leave_types.name','LIKE','%casual%')
                ->whereMonth('leaves.created_at', $month)
                ->where('user_id',$user->id)
                ->join('leave_types','leave_types.id','=','leaves.leave_type_id')
                ->pluck('no_of_days')
                ->sum();

            $user->maternity_leaves = Leave::where('leave_types.name','LIKE','%maternity%')
                ->whereMonth('leaves.created_at', $month)
                ->where('user_id',$user->id)
                ->join('leave_types','leave_types.id','=','leaves.leave_type_id')
                ->pluck('no_of_days')
                ->sum();

            $user->sick_leaves = Leave::where('leave_types.name','LIKE','%sick%')
                ->whereMonth('leaves.created_at', $month)
                ->where('user_id',$user->id)
                ->join('leave_types','leave_types.id','=','leaves.leave_type_id')
                ->pluck('no_of_days')
                ->sum();

            $user->half_day_leaves = Leave::where('leave_types.name','LIKE','%half%')
                ->whereMonth('leaves.created_at', $month)
                ->where('user_id',$user->id)
                ->join('leave_types','leave_types.id','=','leaves.leave_type_id')
                ->pluck('no_of_days')
                ->sum();

            $user->full_day_leaves = Leave::where('leave_types.name','LIKE','%full%')
                ->whereMonth('leaves.created_at', $month)
                ->where('user_id',$user->id)
                ->join('leave_types','leave_types.id','=','leaves.leave_type_id')
                ->pluck('no_of_days')
                ->sum();

            $user->total_leaves = Leave::whereMonth('leaves.created_at', $month)
                ->where('user_id',$user->id)
                ->pluck('no_of_days')
                ->sum();
        }

        return view('pages.reports.leaveReport')->with([
            'users' => $users,
            'month_name' => $monthName
        ]);
    }


    public function deductionReport(){
        return view('pages.reports.deductionReport');
    }

    public function getDeductionReport(Request $request){
        $month = $request->input('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');

        $users = User::getAllUsers();

        foreach ($users as $user){
            $user->deduction_1 = Deduction::where('deduction_types.name','LIKE','%deduction%')
                ->where('month', $month)
                ->where('user_id',$user->id)
                ->join('deduction_types','deduction_types.id','=','deductions.deduction_type_id')
                ->pluck('full_amount')
                ->sum();

            $user->nopay = Deduction::where('deduction_types.name','LIKE','%absent%')
                ->where('month', $month)
                ->where('user_id',$user->id)
                ->join('deduction_types','deduction_types.id','=','deductions.deduction_type_id')
                ->pluck('full_amount')
                ->sum();

            $user->food = Deduction::where('deduction_types.name','LIKE','%food%')
                ->where('month', $month)
                ->where('user_id',$user->id)
                ->join('deduction_types','deduction_types.id','=','deductions.deduction_type_id')
                ->pluck('full_amount')
                ->sum();

            $user->welfare = Deduction::where('deduction_types.name','LIKE','%welfare%')
                ->where('month', $month)
                ->where('user_id',$user->id)
                ->join('deduction_types','deduction_types.id','=','deductions.deduction_type_id')
                ->pluck('full_amount')
                ->sum();

            $user->total = Deduction::where('month', $month)
                ->where('user_id',$user->id)
                ->join('deduction_types','deduction_types.id','=','deductions.deduction_type_id')
                ->pluck('full_amount')
                ->sum();
        }

        return view('pages.reports.deductionReport')->with([
            'users' => $users,
            'month_name' => $monthName
        ]);
    }


    public function monthsalaryReport(){
        return view('pages.reports.monthsalaryReport');
    }

    public function getMonthsalaryReport(Request $request){
        $month = $request->input('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');

        $salaries = Salary::whereMonth('created_at', $month)->get();

        foreach ($salaries as $salary){
            $user = User::where('id',$salary->user_id)->first();
            $salary->username = $user->username;
            $salary->basic = $user->basic_salary;
        }

        return view('pages.reports.monthsalaryReport')->with([
            'salaries' => $salaries,
            'month_name' => $monthName
        ]);
    }


    public function epfetfReport(){
        return view('pages.reports.epfetfReport');
    }

    public function GetEpfetfReport(Request $request){
        $month = $request->input('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');

        $salaries = Salary::whereMonth('created_at', $month)->get();

        $totals['epf_12'] = 0;
        $totals['etf_3'] = 0;
        $totals['total'] = 0;

        foreach ($salaries as $salary){
            $user = User::where('id',$salary->user_id)->first();
            $salary->username = $user->username;
            $salary->basic = $user->basic_salary;

            $totals['epf_12'] += $salary->epf_12;
            $totals['etf_3'] += $salary->etf_3;
            $totals['total'] += $salary->epf_12 + $salary->etf_3 + $salary->epf_8;
        }

        return view('pages.reports.epfetfReport')->with([
            'salaries' => $salaries,
            'month_name' => $monthName,
            'totals' => $totals
        ]);
    }
}
