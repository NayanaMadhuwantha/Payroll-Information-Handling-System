<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Salary;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalaryController extends Controller
{
    public function index(Request $request){

        $user_id = Auth::user()->id;

        if ($request->has('user_id')){
            $user_id = $request->input('user_id');
        }

        $users = User::getAllUsers();

        $grade_id = $users->where('id',$user_id)->first()->grade_id;

        $basic_salary = Grade::find($grade_id)->basic_salary;

        return view('pages.month-salary.index')->with([
            'users' => $users,
            'selected_user_id'=>$user_id,
            'basic_salary' =>$basic_salary
        ]);
    }

    public function store(Request $request){
        $basic = $request->input('basic');
        $allowances = $request->input('attendance_allowance')
            +$request->input('other_allowance')
            +$request->input('normal_ot')
            +$request->input('double_ot');

        $deductions = $request->input('no_pay')
            +$request->input('other_deductions')
            +$request->input('welfare');

        $salary = new Salary();
        $salary->user_id = $request->input('user');
        $salary->attendance_allowance = $request->input('attendance_allowance');
        $salary->other_allowance = $request->input('other_allowance');
        $salary->normal_ot = $request->input('normal_ot');
        $salary->double_ot = $request->input('double_ot');
        $salary->epf_8 = $basic * 8 /100;
        $salary->epf_12 = $basic * 12 /100;
        $salary->etf_3 = $basic * 3 /100;
        $salary->no_pay = $request->input('no_pay');
        $salary->other_deductions = $request->input('other_deductions');
        $salary->welfare = $request->input('welfare');
        $salary->basic = $request->input('basic');
        $salary->epf_gross = $basic * 20 /100;;
        $salary->gross_wage = $allowances-$deductions;
        $salary->net_salary = $basic - ($basic * 8 /100) + $allowances - $deductions;
        $salary->total_salary = $basic + $allowances - $deductions + ($basic * 23 /100);
        $salary->save();

        $users = User::getAllUsers();
        return view('pages.month-salary.index')->with([
            'users' => $users
        ]);
    }

    public function salarySlip(){
        return view('pages.month-salary.salarySlip');
    }
}
