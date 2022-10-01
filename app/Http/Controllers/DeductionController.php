<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeductionController extends Controller
{
    public function index(){
        return view('pages.deduction.index');
    }
}
