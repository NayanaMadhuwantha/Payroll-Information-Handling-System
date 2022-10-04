<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        $grades = Grade::all();
        return view('pages.employee-profile.index')->with(['user'=>$user,'grades'=>$grades]);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $grades = Grade::all();

        $user->search_employee_id = $request->input('search_employee_id');
        $user->etf_epf_number = $request->input('etf_epf_number');
        $user->full_name = $request->input('full_name');
        $user->name_with_initials = $request->input('name_with_initials');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->contact = $request->input('contact');
        //$user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->date_hired = $request->input('date_hired');
        $user->basic_salary = $request->input('basic_salary');
        $user->gender = $request->input('gender');
        $user->position = $request->input('position');
        $user->grade_id = (int)$request->input('grade');
        $user->save();

        return view('pages.employee-profile.index')->with(['user'=>$user,'grades'=>$grades]);
    }
}
