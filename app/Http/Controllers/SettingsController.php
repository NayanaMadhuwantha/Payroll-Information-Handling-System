<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index(){
        $grades = Grade::all();
        return view('pages.settings.index')->with([
            'grades' => $grades
        ]);
    }

    public function updatePassword(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $grades = Grade::all();

        $new_password = $request->input('new_password');
        $new_re_password = $request->input('new_re_password');

        $user = User::where('username',$username)->first();
        $user = password_verify($password, optional($user)->getAuthPassword()) ? $user : false;

        if (!$user){
            $message = "Incorrect username or password";
            return view('pages.settings.index')->with([
                'message'=>$message,
                'grades' => $grades
            ]);
        }

        if ($new_password != $new_re_password){
            $message = "Passwords does not match";
            return view('pages.settings.index')->with([
                'message'=>$message,
                'grades' => $grades
            ]);
        }

        $user->password =  Hash::make($new_password);
        $user->save();

        $message = "Passwords updated successfully!";
        return view('pages.settings.index')->with([
            'message'=>$message,
            'grades' => $grades
        ]);
    }

    public function addUser(Request $request){
        $user = new User();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->position = $request->input('position');
        $user->etf_epf_number = $request->input('etf_epf_number');
        $user->full_name = $request->input('full_name');
        $user->name_with_initials = $request->input('name_with_initials');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->contact = $request->input('contact');
        $user->address = $request->input('address');
        $user->nic_number = $request->input('nic_number');
        $user->gender = $request->input('gender');
        $user->date_hired = $request->input('date_hired');
        $user->grade_id = $request->input('grade_id');

        $finger_print_file = $request->file('finger_print');

        if ($finger_print_file){
            $user->finger_print = FileHelper::saveFile($request->finger_print, public_path('finger-prints'));
        }

        $user->save();

        $grades = Grade::all();
        return view('pages.settings.index')->with([
            'grades' => $grades
        ]);
    }

    public function updateGrades(Request $request){
        $grade = Grade::where('id',$request->input('grade_id'))->first();

        if ($grade) {
            $grade->per_day_salary_rate = $request->input('per_day_salary_rate');
            $grade->epf_8_rate = $request->input('epf_8_rate');
            $grade->epf_12_rate = $request->input('epf_12_rate');
            $grade->etf_3_rate = $request->input('etf_3_rate');
            $grade->ot_rate = $request->input('ot_rate');
            $grade->attendance_allowance = $request->input('attendance_allowance');
            $grade->basic_salary = $request->input('basic_salary');
            $grade->maximum_advance = $request->input('maximum_advance');
            $grade->maximum_loan = $request->input('maximum_loan');
            $grade->salary_rate = $request->input('salary_rate');
            $grade->save();
        }

        $grades = Grade::all();
        return view('pages.settings.index')->with([
            'grades' => $grades
        ]);
    }
}
