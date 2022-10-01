<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllowanceController extends Controller
{
    public function index(){
        return view('pages.allowance.index');
    }
}
