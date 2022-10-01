<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvanceController extends Controller
{
    public function index(){
        return view('pages.advance.index');
    }
}
