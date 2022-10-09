<?php

namespace App\Http\Controllers;

use App\Models\Allowance;
use App\Models\AllowanceType;
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

        $users = User::all();
        foreach ($users as $user){
            $user->attendance_allowances = Allowance::where('allowance_types.name','LIKE','attendance')
                ->where('allowances.month',$month)
                ->where('user_id',$user->id)
                ->join('allowance_types','allowance_types.id','=','allowances.allowance_type_id')
                ->pluck('allowance_amount')
                ->sum();

            $user->other_allowances = Allowance::where('allowance_types.name','LIKE','other')
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

    public function leaveReport(){
        return view('pages.reports.leaveReport');
    }

    public function deductionReport(){
        return view('pages.reports.deductionReport');
    }

    public function monthsalaryReport(){
        return view('pages.reports.monthsalaryReport');
    }

    public function epfetfReport(){
        return view('pages.reports.epfetfReport');
    }
}
