<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function index(Request $request){
        $users = User::getAllUsers();
        $attendance = Attendance::all();
        $user = Auth::user();

        if ($request->has('user_id')){
            $user = User::find($request->input('user_id'));
        }

        $finger_print = asset('finger-prints/'.$user->finger_print);

        $selected_user_id = $user->id;

        return view('pages.attendance.index')->with([
            'users' => $users,
            'attendance' => $attendance,
            'user' => $user,
            'finger_print' => $finger_print,
            'selected_user_id' => $selected_user_id
        ]);
    }

    public function store(Request $request){
        $attendance = new Attendance();
        $attendance->user_id = $request->input('user');
        $attendance->date = Carbon::today()->toDateString();
        $attendance->time_in = $request->input('time_in');
        $attendance->time_out = $request->input('time_out');
        $attendance->save();

        $users = User::getAllUsers();
        $attendance = Attendance::all();
        return view('pages.attendance.index')->with([
            'users' => $users,
            'attendance' => $attendance
        ]);
    }

}
