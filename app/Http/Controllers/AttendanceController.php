<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index(){
        $users = User::all();
        $attendance = Attendance::all();
        return view('pages.attendance.index')->with([
            'users' => $users,
            'attendance' => $attendance
        ]);
    }

    public function store(Request $request){
        $attendance = new Attendance();
        $attendance->user_id = $request->input('user');
        $attendance->date = Carbon::today()->toDateString();
        $attendance->time_in = $request->input('time_in');
        $attendance->time_out = $request->input('time_out');
        $attendance->save();

        $users = User::all();
        $attendance = Attendance::all();
        return view('pages.attendance.index')->with([
            'users' => $users,
            'attendance' => $attendance
        ]);
    }

}
