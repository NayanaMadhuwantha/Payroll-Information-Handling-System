<?php

namespace App\Http\Controllers;

use App\Models\Allowance;
use App\Models\AllowanceType;
use App\Models\Leave;
use App\Models\OverTime;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AllowanceController extends Controller
{
    public function index(){
        $users = User::all();
        $allowance = Allowance::all();

        foreach ($users as $user){
            $user->leaves  = Leave::where('user_id',$user->id)->where('status','Approved')->whereYear('created_at', Carbon::now()->year)->pluck('no_of_days')->sum();
            $user->attendance_allowance = $user->grade()->first()->attendance_allowance - ($user->leaves * $user->grade()->first()->per_day_salary_rate);

            $user->other_allowance_report = Allowance::where('user_id',$user->id)->where('allowance_types.name','Other')
                ->join('allowance_types','allowance_types.id','=','allowances.allowance_type_id')->pluck('allowance_amount')->sum();
            $user->attendance_allowance_report = Allowance::where('user_id',$user->id)->where('allowance_types.name','Attendance')
                ->join('allowance_types','allowance_types.id','=','allowances.allowance_type_id')->pluck('allowance_amount')->sum();
            $normal_ot_amount = OverTime::where('user_id',$user->id)->pluck('normal_ot_amount')->sum();
            $double_ot_amount = OverTime::where('user_id',$user->id)->pluck('double_ot_amount')->sum();
            $user->ot_allowance_report = $double_ot_amount+$normal_ot_amount;
        }
        return view('pages.allowance.index')->with([
                'users' => $users,
            'allowance' => $allowance
        ]);
    }

    public function saveAttendanceAllowance(Request $request){
        $grade = User::where('id',$request->input('user'))->first()->grade()->first();
        $allowance_type = AllowanceType::where('grade_id',$grade->id)->where('name','Attendance')->first();

        if ($allowance_type) {
            $attendance_allowance = new Allowance();
            $attendance_allowance->user_id = $request->input('user');
            $attendance_allowance->allowance_type_id = $allowance_type->id;
            $attendance_allowance->month = $request->input('month');
            $attendance_allowance->number_of_leaves = $request->input('number_of_leaves');
            $attendance_allowance->allowance_amount = $request->input('allowance_amount');
            $attendance_allowance->save();
        }

        $users = User::all();
        $allowance = Allowance::all();
        foreach ($users as $user){
            $user->leaves  = Leave::where('user_id',$user->id)->where('status','Approved')->whereYear('created_at', Carbon::now()->year)->pluck('no_of_days')->sum();
            $user->attendance_allowance = $user->grade()->first()->attendance_allowance - ($user->leaves * $user->grade()->first()->per_day_salary_rate);

            $user->other_allowance_report = Allowance::where('user_id',$user->id)->where('allowance_types.name','Other')
                ->join('allowance_types','allowance_types.id','=','allowances.allowance_type_id')->pluck('allowance_amount')->sum();
            $user->attendance_allowance_report = Allowance::where('user_id',$user->id)->where('allowance_types.name','Attendance')
                ->join('allowance_types','allowance_types.id','=','allowances.allowance_type_id')->pluck('allowance_amount')->sum();
            $normal_ot_amount = OverTime::where('user_id',$user->id)->pluck('normal_ot_amount')->sum();
            $double_ot_amount = OverTime::where('user_id',$user->id)->pluck('double_ot_amount')->sum();
            $user->ot_allowance_report = $double_ot_amount+$normal_ot_amount;
        }
        return view('pages.allowance.index')->with([
            'users' => $users,
            'allowance' => $allowance
        ]);
    }

    public function saveOtherAllowance(Request $request){
        $grade = User::where('id',$request->input('user'))->first()->grade()->first();
        $allowance_type = AllowanceType::where('grade_id',$grade->id)->where('name','Other')->first();

        if ($allowance_type) {
            $attendance_allowance = new Allowance();
            $attendance_allowance->user_id = $request->input('user');
            $attendance_allowance->allowance_type_id = $allowance_type->id;
            $attendance_allowance->month = $request->input('month');
            $attendance_allowance->allowance_amount = $request->input('allowance_amount');
            $attendance_allowance->save();
        }

        $users = User::all();
        $allowance = Allowance::all();
        foreach ($users as $user){
            $user->leaves  = Leave::where('user_id',$user->id)->where('status','Approved')->whereYear('created_at', Carbon::now()->year)->pluck('no_of_days')->sum();
            $user->attendance_allowance = $user->grade()->first()->attendance_allowance - ($user->leaves * $user->grade()->first()->per_day_salary_rate);

            $user->other_allowance_report = Allowance::where('user_id',$user->id)->where('allowance_types.name','Other')
                ->join('allowance_types','allowance_types.id','=','allowances.allowance_type_id')->pluck('allowance_amount')->sum();
            $user->attendance_allowance_report = Allowance::where('user_id',$user->id)->where('allowance_types.name','Attendance')
                ->join('allowance_types','allowance_types.id','=','allowances.allowance_type_id')->pluck('allowance_amount')->sum();
            $normal_ot_amount = OverTime::where('user_id',$user->id)->pluck('normal_ot_amount')->sum();
            $double_ot_amount = OverTime::where('user_id',$user->id)->pluck('double_ot_amount')->sum();
            $user->ot_allowance_report = $double_ot_amount+$normal_ot_amount;
        }
        return view('pages.allowance.index')->with([
            'users' => $users,
            'allowance' => $allowance
        ]);
    }
}
