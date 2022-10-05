<?php

namespace App\Http\Controllers;

use App\Models\Allowance;
use App\Models\Leave;
use App\Models\OverTime;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OverTimeController extends Controller
{
    public function store(Request $request){
        $user = User::find($request->input('user'));

        $over_time = new OverTime();
        $over_time->user_id = $user->id;
        $over_time->month = $request->input('month');
        $over_time->normal_ot_hours = $request->input('normal_ot_hours');
        $over_time->double_ot_hours = $request->input('double_ot_hours');
        $over_time->normal_ot_amount = $user->grade()->first()->ot_rate * $request->input('normal_ot_hours');
        $over_time->double_ot_amount = $user->grade()->first()->ot_rate * $request->input('double_ot_hours') * 2;
        $over_time->save();


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
