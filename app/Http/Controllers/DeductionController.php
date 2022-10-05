<?php

namespace App\Http\Controllers;

use App\Models\Deduction;
use App\Models\DeductionType;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class DeductionController extends Controller
{
    public function index(){
        $users = User::all();
        $deductions = Deduction::get();
        return view('pages.deduction.index')->with([
            'users' => $users,
            'deductions' => $deductions
        ]);
    }

    public function saveDeduction(Request $request){
        $deduction_type = DeductionType::where('name','Deduction')->first();

        if ($deduction_type) {
            $deduction = new Deduction();
            $deduction->user_id = $request->input('user');
            $deduction->deduction_type_id = $deduction_type->id;
            $deduction->date = $request->input('date');
            $deduction->reason = $request->input('reason');
            $deduction->month = $request->input('month');
            $deduction->number_of_dates = $request->input('number_of_dates');
            $deduction->per_amount = $request->input('per_amount');
            $deduction->full_amount = $request->input('per_amount') * $request->input('number_of_dates');
            $deduction->save();
        }

        $users = User::all();
        return view('pages.deduction.index')->with([
            'users' => $users
        ]);
    }

    public function saveAbsence(Request $request){
        $deduction_type = DeductionType::where('name','Absent')->first();

        if ($deduction_type) {
            $deduction = new Deduction();
            $deduction->month = $request->input('month');
            $deduction->user_id = $request->input('user');
            $deduction->deduction_type_id = $deduction_type->id;
            $deduction->date = $request->input('date');
            $deduction->number_of_dates = $request->input('number_of_leaves');
            $deduction->per_amount = $request->input('rate');
            $deduction->number_of_absents = $request->input('number_of_absents');
            $deduction->full_amount = $request->input('full_amount');
            $deduction->save();
        }

        $users = User::all();
        return view('pages.deduction.index')->with([
            'users' => $users
        ]);
    }

    public function saveFoodDeduction(Request $request){
        $deduction_type = DeductionType::where('name','Food')->first();

        if ($deduction_type) {
            $deduction = new Deduction();
            $deduction->user_id = $request->input('user');
            $deduction->deduction_type_id = $deduction_type->id;
            $deduction->date = $request->input('date');
            $deduction->reason = $request->input('reason');
            $deduction->month = $request->input('month');
            $deduction->number_of_dates = $request->input('number_of_dates');
            $deduction->per_amount = $request->input('per_amount');
            $deduction->full_amount = $request->input('per_amount') * $request->input('number_of_dates');
            $deduction->save();
        }

        $users = User::all();
        return view('pages.deduction.index')->with([
            'users' => $users
        ]);
    }
}
