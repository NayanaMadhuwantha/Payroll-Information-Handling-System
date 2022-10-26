<?php

namespace App\Http\Controllers;

use App\Models\Allowance;
use App\Models\Deduction;
use App\Models\Grade;
use App\Models\Leave;
use App\Models\OverTime;
use App\Models\Salary;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use NumberFormatter;

class SalaryController extends Controller
{
    public function index(Request $request){

        $user_id = Auth::user()->id;

        if ($request->has('user_id')){
            $user_id = $request->input('user_id');
        }

        $user = User::find($user_id);

        $month = 1;

        if ($request->has('month')){
            $month = $request->input('month');
        }


        $users = User::getAllUsers();
        $grade_id = $users->where('id',$user_id)->first()->grade_id;

        $basic_salary = Grade::find($grade_id)->basic_salary;

        $other_allowance = Allowance::where('user_id',$user->id)->where('allowance_types.name','Other')->where('month',$month)
            ->join('allowance_types','allowance_types.id','=','allowances.allowance_type_id')->pluck('allowance_amount')->sum();
        $attendance_allowance = Allowance::where('user_id',$user->id)->where('allowance_types.name','Attendance')->where('month',$month)
            ->join('allowance_types','allowance_types.id','=','allowances.allowance_type_id')->pluck('allowance_amount')->sum();
        $normal_ot_amount = OverTime::where('user_id',$user->id)->where('month',$month)->pluck('normal_ot_amount')->sum();
        $double_ot_amount = OverTime::where('user_id',$user->id)->where('month',$month)->pluck('double_ot_amount')->sum();


        $deduction_1 = Deduction::where('deduction_types.name','LIKE','%deduction%')
            ->where('month', $month)
            ->where('user_id',$user->id)
            ->join('deduction_types','deduction_types.id','=','deductions.deduction_type_id')
            ->pluck('full_amount')
            ->sum();

        $nopay = Deduction::where('deduction_types.name','LIKE','%absent%')
            ->where('month', $month)
            ->where('user_id',$user->id)
            ->join('deduction_types','deduction_types.id','=','deductions.deduction_type_id')
            ->pluck('full_amount')
            ->sum();

        $food = Deduction::where('deduction_types.name','LIKE','%food%')
            ->where('month', $month)
            ->where('user_id',$user->id)
            ->join('deduction_types','deduction_types.id','=','deductions.deduction_type_id')
            ->pluck('full_amount')
            ->sum();

        $welfare = Deduction::where('deduction_types.name','LIKE','%welfare%')
            ->where('month', $month)
            ->where('user_id',$user->id)
            ->join('deduction_types','deduction_types.id','=','deductions.deduction_type_id')
            ->pluck('full_amount')
            ->sum();

        $other = $deduction_1 + $food;

        return view('pages.month-salary.index')->with([
            'users' => $users,
            'selected_user_id'=>$user_id,
            'basic_salary' =>$basic_salary,
            'month' => $month,
            'attendance_allowance' => $attendance_allowance,
            'other_allowance' => $other_allowance,
            'normal_ot_amount' => $normal_ot_amount,
            'double_ot_amount' => $double_ot_amount,
            'nopay' => $nopay,
            'welfare' => $welfare,
            'other' => $other,

        ]);
    }

    public function store(Request $request){
        $user_id = Auth::user()->id;

        if ($request->has('user_id')){
            $user_id = $request->input('user_id');
        }

        $month = 1;

        if ($request->has('month')){
            $month = $request->input('month');
        }

        if ($request->input('calculate_all') == "on"){
            $all_users = User::where('id','<>',$user_id)->get();

            foreach ($all_users as $other_user){
                $grade_id = $other_user->grade_id;
                $basic_salary = Grade::find($grade_id)->basic_salary;

                $other_allowance = Allowance::where('user_id',$other_user->id)->where('allowance_types.name','Other')->where('month',$month)
                    ->join('allowance_types','allowance_types.id','=','allowances.allowance_type_id')->pluck('allowance_amount')->sum();
                $attendance_allowance = Allowance::where('user_id',$other_user->id)->where('allowance_types.name','Attendance')->where('month',$month)
                    ->join('allowance_types','allowance_types.id','=','allowances.allowance_type_id')->pluck('allowance_amount')->sum();
                $normal_ot_amount = OverTime::where('user_id',$other_user->id)->where('month',$month)->pluck('normal_ot_amount')->sum();
                $double_ot_amount = OverTime::where('user_id',$other_user->id)->where('month',$month)->pluck('double_ot_amount')->sum();


                $deduction_1 = Deduction::where('deduction_types.name','LIKE','%deduction%')
                    ->where('month', $month)
                    ->where('user_id',$other_user->id)
                    ->join('deduction_types','deduction_types.id','=','deductions.deduction_type_id')
                    ->pluck('full_amount')
                    ->sum();

                $nopay = Deduction::where('deduction_types.name','LIKE','%absent%')
                    ->where('month', $month)
                    ->where('user_id',$other_user->id)
                    ->join('deduction_types','deduction_types.id','=','deductions.deduction_type_id')
                    ->pluck('full_amount')
                    ->sum();

                $food = Deduction::where('deduction_types.name','LIKE','%food%')
                    ->where('month', $month)
                    ->where('user_id',$other_user->id)
                    ->join('deduction_types','deduction_types.id','=','deductions.deduction_type_id')
                    ->pluck('full_amount')
                    ->sum();

                $welfare = Deduction::where('deduction_types.name','LIKE','%welfare%')
                    ->where('month', $month)
                    ->where('user_id',$other_user->id)
                    ->join('deduction_types','deduction_types.id','=','deductions.deduction_type_id')
                    ->pluck('full_amount')
                    ->sum();

                $other = $deduction_1 + $food;

                $allowances = $attendance_allowance
                    +$other_allowance
                    +$normal_ot_amount
                    +$double_ot_amount;

                $deductions = $nopay
                    +$other
                    +$welfare;

                $salary = new Salary();
                $salary->user_id = $other_user->id;
                $salary->attendance_allowance = $attendance_allowance;
                $salary->other_allowance = $other_allowance;
                $salary->normal_ot = $normal_ot_amount;
                $salary->double_ot = $double_ot_amount;
                $salary->epf_8 = $basic_salary * 8 /100;
                $salary->epf_12 = $basic_salary * 12 /100;
                $salary->etf_3 = $basic_salary * 3 /100;
                $salary->no_pay = $nopay;
                $salary->other_deductions = $other;
                $salary->welfare = $welfare;
                $salary->basic = $basic_salary;
                $salary->epf_gross = $basic_salary * 20 /100;;
                $salary->gross_wage = $allowances-$deductions;
                $salary->net_salary = $basic_salary - ($basic_salary * 8 /100) + $allowances - $deductions;
                $salary->total_salary = $basic_salary + $allowances - $deductions + ($basic_salary * 23 /100);
                $salary->created_at = Carbon::createFromFormat('m/d/Y', '1/'.$month.'/2022')
                    ->firstOfMonth()
                    ->format('Y-m-d');
                $salary->save();
            }
        }



        $user = User::find($user_id);
        $users = User::getAllUsers();

        $allowances = $request->input('attendance_allowance')
            +$request->input('other_allowance')
            +$request->input('normal_ot')
            +$request->input('double_ot');

        $deductions = $request->input('no_pay')
            +$request->input('other_deductions')
            +$request->input('welfare');

        $grade_id = $users->where('id',$user_id)->first()->grade_id;
        $basic = Grade::find($grade_id)->basic_salary;

        $salary = new Salary();
        $salary->user_id = $request->input('user');
        $salary->attendance_allowance = $request->input('attendance_allowance');
        $salary->other_allowance = $request->input('other_allowance');
        $salary->normal_ot = $request->input('normal_ot');
        $salary->double_ot = $request->input('double_ot');
        $salary->epf_8 = $basic * 8 /100;
        $salary->epf_12 = $basic * 12 /100;
        $salary->etf_3 = $basic * 3 /100;
        $salary->no_pay = $request->input('no_pay');
        $salary->other_deductions = $request->input('other_deductions');
        $salary->welfare = $request->input('welfare');
        $salary->basic = $basic;
        $salary->epf_gross = $basic * 20 /100;;
        $salary->gross_wage = $allowances-$deductions;
        $salary->net_salary = $basic - ($basic * 8 /100) + $allowances - $deductions;
        $salary->total_salary = $basic + $allowances - $deductions + ($basic * 23 /100);
        $salary->created_at = Carbon::createFromFormat('m/d/Y', '1/'.$month.'/2022')
                            ->firstOfMonth()
                            ->format('Y-m-d');
        $salary->save();


        $grade_id = $users->where('id',$user_id)->first()->grade_id;

        $basic_salary = Grade::find($grade_id)->basic_salary;

        $other_allowance = Allowance::where('user_id',$user->id)->where('allowance_types.name','Other')->where('month',$month)
            ->join('allowance_types','allowance_types.id','=','allowances.allowance_type_id')->pluck('allowance_amount')->sum();
        $attendance_allowance = Allowance::where('user_id',$user->id)->where('allowance_types.name','Attendance')->where('month',$month)
            ->join('allowance_types','allowance_types.id','=','allowances.allowance_type_id')->pluck('allowance_amount')->sum();
        $normal_ot_amount = OverTime::where('user_id',$user->id)->where('month',$month)->pluck('normal_ot_amount')->sum();
        $double_ot_amount = OverTime::where('user_id',$user->id)->where('month',$month)->pluck('double_ot_amount')->sum();


        $deduction_1 = Deduction::where('deduction_types.name','LIKE','%deduction%')
            ->where('month', $month)
            ->where('user_id',$user->id)
            ->join('deduction_types','deduction_types.id','=','deductions.deduction_type_id')
            ->pluck('full_amount')
            ->sum();

        $nopay = Deduction::where('deduction_types.name','LIKE','%absent%')
            ->where('month', $month)
            ->where('user_id',$user->id)
            ->join('deduction_types','deduction_types.id','=','deductions.deduction_type_id')
            ->pluck('full_amount')
            ->sum();

        $food = Deduction::where('deduction_types.name','LIKE','%food%')
            ->where('month', $month)
            ->where('user_id',$user->id)
            ->join('deduction_types','deduction_types.id','=','deductions.deduction_type_id')
            ->pluck('full_amount')
            ->sum();

        $welfare = Deduction::where('deduction_types.name','LIKE','%welfare%')
            ->where('month', $month)
            ->where('user_id',$user->id)
            ->join('deduction_types','deduction_types.id','=','deductions.deduction_type_id')
            ->pluck('full_amount')
            ->sum();

        $other = $deduction_1 + $food;



        return view('pages.month-salary.index')->with([
            'users' => $users,
            'selected_user_id'=>$user_id,
            'basic_salary' =>$basic_salary,
            'month' => $month,
            'attendance_allowance' => $attendance_allowance,
            'other_allowance' => $other_allowance,
            'normal_ot_amount' => $normal_ot_amount,
            'double_ot_amount' => $double_ot_amount,
            'nopay' => $nopay,
            'welfare' => $welfare,
            'other' => $other,

        ]);
    }

    public function salarySlip(Request $request){
        $user_id = $request->input('user_id');
        $user = User::find($user_id);
        $month = 1;
        $month_name = null;
        $salary_in_words = null;

        if ($request->has('month')){
            $month = $request->input('month');
        }

        $salary = Salary::where('user_id',$user_id)->whereMonth('created_at',$month)->first();

        if ($salary) {
            $dateObj = DateTime::createFromFormat('!m', $month);
            $month_name = $dateObj->format('F');

            $digit = new NumberFormatter("en", NumberFormatter::SPELLOUT);
            $salary_in_words = $digit->format($salary->net_salary);
        }


        return view('pages.month-salary.salarySlip')->with([
            'user'=>$user,
            'month' => (int)$month,
            'month_name' => $month_name,
            'salary_in_words' => $salary_in_words,
            'salary' => $salary
        ]);
    }

    public function downloadSalarySlip(Request $request){
        $user_id = $request->input('user_id');
        $month = $request->input('month');

        $user = User::find($user_id);

        $salary = Salary::where('user_id',$user_id)->whereMonth('created_at',$month)->first();
        $dateObj = DateTime::createFromFormat('!m', $month);
        $month_name = $dateObj->format('F');

        $digit = new NumberFormatter("en", NumberFormatter::SPELLOUT);
        $salary_in_words = $digit->format(round($salary->net_salary, 2));

        $data = [
            'user'=>$user,
            'month' => (int)$month,
            'month_name' => $month_name,
            'salary_in_words' => $salary_in_words,
            'salary' => $salary
        ];

        $pdf = Pdf::loadView('pages.month-salary.slip-template', $data);
        return $pdf->download('salary-slip.pdf');
    }
}
