<?php

namespace App\Http\Controllers;

use App\Models\AvailableLeave;
use App\Models\Leave;
use App\Models\LeaveType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{
    public function index(Request $request){

        $user_id = Auth::user()->id;

        if ($request->has('user_id')){
            $user_id = $request->input('user_id');
        }

        $available_leaves = AvailableLeave::where('user_id',$user_id)->get();
        $users = User::getAllUsers();
        $remaining_leaves = AvailableLeave::where('user_id',$user_id)->where('no_of_leaves','>',0)->get();
        $approved_leaves = Leave::where('user_id',$user_id)->where('status','=','Approved')->get();

        if (Auth::user()->position == 'admin'){
            $all_leaves = Leave::all();
        }
        else{
            $all_leaves = Leave::where('user_id',$user_id)->get();
        }

        return view('pages.leave.index')->with([
            'available_leaves'=>$available_leaves,
            'users'=>$users,
            'remaining_leaves'=>$remaining_leaves,
            'approved_leaves'=>$approved_leaves,
            'all_leaves'=>$all_leaves,
            'selected_user_id'=>$user_id
        ]);
    }

    public function store(Request $request){
        $user = User::find($request->input('user'));
        $users = User::where('id',Auth::user()->id)->get();
        $available_leaves = AvailableLeave::where('user_id',Auth::user()->id)->get();
        $remaining_leaves = AvailableLeave::where('user_id',Auth::user()->id)->where('no_of_leaves','>',0)->get();
        $approved_leaves = Leave::where('user_id',Auth::user()->id)->where('status','=','Approved')->get();
        $all_leaves = Leave::where('user_id',Auth::user()->id)->get();

        $leave_type_id = $request->input('leave_type');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $reason = $request->input('reason');

        $leave_type = LeaveType::find($leave_type_id);

        $leave_count = 1;

        if ($end_date){
            $start = \Carbon\Carbon::createFromFormat('Y-m-d', $start_date);
            $end = \Carbon\Carbon::createFromFormat('Y-m-d', $end_date);
            $leave_count = $start->diffInDays($end) + 1;
        }

        $selected_leave = AvailableLeave::where('user_id',$user->id)->where('leave_type_id',$leave_type_id)->first();

        if (!$selected_leave){
            $message = "You don't have ".$leave_type->name . " leaves";
            return view('pages.leave.index')->with([
                'available_leaves'=>$available_leaves,
                'users'=>$users,
                'remaining_leaves'=>$remaining_leaves,
                'message'=>$message,
                'approved_leaves'=>$approved_leaves,
                'all_leaves'=>$all_leaves
            ]);
        }

        if ($selected_leave->no_of_leaves < $leave_count){
            $message = "You only have ". $selected_leave->no_of_leaves." ".$selected_leave->type()->first()->name . " leave(s)";
            return view('pages.leave.index')->with([
                'available_leaves'=>$available_leaves,
                'users'=>$users,
                'remaining_leaves'=>$remaining_leaves,
                'message'=>$message,
                'approved_leaves'=>$approved_leaves,
                'all_leaves'=>$all_leaves
            ]);
        }

        $leave = new Leave();
        $leave->user_id = $user->id;
        $leave->leave_type_id = $leave_type_id;
        $leave->start_date =$start_date;
        $leave->end_date = $end_date;
        $leave->no_of_days = $leave_count;
        $leave->no_of_days = $leave_count;
        $leave->reason = $reason;
        $leave->save();

        $selected_leave->no_of_leaves = $selected_leave->no_of_leaves - $leave_count;
        $selected_leave->save();

        $available_leaves = AvailableLeave::where('user_id',Auth::user()->id)->get();
        $remaining_leaves = AvailableLeave::where('user_id',Auth::user()->id)->where('no_of_leaves','>',0)->get();
        $approved_leaves = Leave::where('user_id',Auth::user()->id)->where('status','=','Approved')->get();
        $all_leaves = Leave::where('user_id',Auth::user()->id)->get();
        $message = "Leave(s) applied successfully!";
        return view('pages.leave.index')->with([
            'available_leaves'=>$available_leaves,
            'users'=>$users,
            'remaining_leaves'=>$remaining_leaves,
            'message'=>$message,
            'approved_leaves'=>$approved_leaves,
            'all_leaves'=>$all_leaves
        ]);
    }

    public function handleLeave(Request $request){
        $leave = Leave::find($request->input('leave_id'));
        $leave->status = $request->input('action');
        $leave->save();


        $user_id = Auth::user()->id;

        if ($request->has('user_id')){
            $user_id = $request->input('user_id');
        }

        $available_leaves = AvailableLeave::where('user_id',$user_id)->get();
        $users = User::getAllUsers();
        $remaining_leaves = AvailableLeave::where('user_id',$user_id)->where('no_of_leaves','>',0)->get();
        $approved_leaves = Leave::where('user_id',$user_id)->where('status','=','Approved')->get();
        $all_leaves = Leave::where('user_id',$user_id)->get();
        return view('pages.leave.index')->with([
            'available_leaves'=>$available_leaves,
            'users'=>$users,
            'remaining_leaves'=>$remaining_leaves,
            'approved_leaves'=>$approved_leaves,
            'all_leaves'=>$all_leaves,
            'selected_user_id'=>$user_id
        ]);
    }
}
