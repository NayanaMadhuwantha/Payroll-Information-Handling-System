<?php

namespace App\Http\Controllers;

use App\Models\Advance;
use App\Models\User;
use Illuminate\Http\Request;

class AdvanceController extends Controller
{
    public function index(){
        $users = User::all();
        $advance = Advance::all();
        return view('pages.advance.index')->with([
            'users' => $users,
            'advance' => $advance
        ]);
    }

    public function store(Request $request){
        $advance = new Advance();
        $advance->user_id = $request->input('user');
        $advance->date = $request->input('date');
        $advance->amount = $request->input('amount');
        $advance->save();

        $users = User::all();
        $advance = Advance::all();
        return view('pages.advance.index')->with([
            'users' => $users,
            'advance' => $advance
        ]);
    }
}
