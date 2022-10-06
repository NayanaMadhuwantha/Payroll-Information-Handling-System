<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index(){
        $users = User::all();
        $loans = Loan::all();

        return view('pages.loan.index')->with([
            'users' => $users,
            'loans' => $loans
        ]);
    }

    public function store(Request $request){
        $loan = new Loan();
        $loan->user_id = $request->input('user');
        $loan->issued_date = $request->input('issued_date');
        $loan->loan_number = $request->input('loan_number');
        $loan->amount = $request->input('amount');
        $loan->monthly_installment = $request->input('monthly_installment');
        $loan->duration = $request->input('duration');
        $loan->save();

        $users = User::all();
        $loans = Loan::all();
        return view('pages.loan.index')->with([
            'users' => $users,
            'loans' => $loans
        ]);
    }
}
