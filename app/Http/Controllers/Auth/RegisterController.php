<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AvailableLeave;
use App\Models\Grade;
use App\Models\LeaveType;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $user = User::create([
            'username' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'position' => 'IT Manager',
            'gender' => $data['gender'],
            'grade_id' => $data['grade_id'],
        ]);

        $leave_types = LeaveType::all();

        foreach ($leave_types as $leave_type){
            $available_leave = new AvailableLeave();
            $available_leave->user_id = $user->id;
            $available_leave->leave_type_id = $leave_type->id;
            $available_leave->no_of_leaves = 10;
            $available_leave->save();
        }

        return $user;
    }

    public function showRegistrationForm()
    {
        $grades = Grade::all();
        return view("auth.register")->with(['grades'=>$grades]);
    }
}
