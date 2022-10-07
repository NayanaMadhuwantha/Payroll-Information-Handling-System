<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index(){
        return view('pages.reports.index');
    }

    public function allowanceReport(){
        return view('pages.reports.allowanceReport');
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