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
}
