@extends('layouts.app')

@section('content')

<div class="page-wrapper" id="allowance">

    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Allowance</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Allowance</li>
                    </ul>
                </div>
            </div>
        </div>


        <ul class="nav nav-tabs nav-tabs-bottom align-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#overtime" role="tab" aria-controls="home" aria-selected="true">Overtime</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#attallowance" role="tab" aria-controls="profile" aria-selected="false">Attendance Allowance</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#othallowance" role="tab" aria-controls="profile" aria-selected="false">Other Allowance</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#report" role="tab" aria-controls="profile" aria-selected="false">Report</a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane active" id="overtime" role="tabpanel" aria-labelledby="overtime-tab">
                <!-- <h4>Expense Approval Settings</h4> -->

                <div class="col-md-8 offset-md-2 mt-lg-2">

                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Overtime Form</h3>
                            </div>
                        </div>
                    </div>



                    <form action="{{ route('over-time.store') }}" method="post">
                        @csrf
                        <div class="form-group row mb-30">
                            <label class="col-form-label col-md-2">Employee</label>
                            <div class="col-md-4">
                                <select name="user" id="user" class="select" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" data-rate="{{ $user->grade->ot_rate }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Month</label>
                            <div class="col-md-4">
                                <select name="month" class="select" required>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Normal OT Hours</label>
                            <div class="col-md-4">
                                <input id="normal_ot_hours" name="normal_ot_hours" type="number" step="0.1" class="form-control" required>
                            </div>
                            <label class="col-form-label col-md-2">Double OT Hours</label>
                            <div class="col-md-4">
                                <input id="double_ot_hours"  name="double_ot_hours" type="number" step="0.1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Normal OT Amount(Rs.)</label>
                            <div class="col-md-4">
                                <input id="normal_ot_amount" name="normal_ot_amount" type="number" step="0.1" class="form-control" disabled>
                            </div>
                            <label class="col-form-label col-md-2">Double OT Amount(Rs.)</label>
                            <div class="col-md-4">
                                <input id="double_ot_amount" name="double_ot_amount" type="number" step="0.1" class="form-control" disabled>
                            </div>
                        </div>


                        <div class="submit-section mt-2 mb-4">
                            <button class="btn btn-success submit-btn">Add</button>
                            <button class="btn btn-danger submit-btn">Clear</button>
                        </div>

                        <p>Logged As: Account analyst</p>

                    </form>
                </div>
            </div>







            <div class="tab-pane" id="attallowance" role="tabpane2" aria-labelledby="attallowance-tab">

                <div class="col-md-6 offset-md-3 mt-lg-2">

                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Attendance Allowance</h3>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('attendance-allowance.store') }}" method="post">
                        @csrf
                        <div class="form-group row mb-30 ">
                            <label class="col-form-label col-md-3">Month</label>
                            <div class="col-md-6">
                                <select name="month" class="select" required>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Employee</label>
                            <div class="col-md-6">
                                <select name="user" id="user-allowance" class="select" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" data-attendance-allowance="{{ $user->grade->attendance_allowance }}" data-calculated-attendance-allowance="{{ $user->attendance_allowance }}" data-grade="{{ $user->grade->name }}" data-leaves="{{ $user->leaves }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Grade</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{ $users->first()->grade->name }}" id="grade-allowance">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Available Attendance Allowance (Rs.)</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{ $users->first()->grade->attendance_allowance }}" id="available-attendance-allowance">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3" >No. of Leave Days</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="number_of_leaves" value="{{ $users->first()->leaves }}" id="leave-days">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Attendance Allowance (Rs.)</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="allowance_amount" value="{{ $users->first()->attendance_allowance }}" id="attendance-allowance">
                            </div>
                        </div>

                        <div class="submit-section mt-2 mb-4">
                             <button class="btn btn-success submit-btn">Add</button>
                            <button class="btn btn-danger submit-btn">Clear</button>
                        </div>

                        <p>Logged As: Account analyst</p>

                    </form>
                </div>
            </div>





            <div class="tab-pane" id="othallowance" role="tabpane3" aria-labelledby="othallowance-tab">
                <!-- <h4>Expense Approval Settings</h4> -->

                <div class="col-md-6 offset-md-3 mt-lg-2">

                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Other Allowance</h3>
                            </div>
                        </div>
                    </div>



                    <form action="{{ route('other-allowance.store') }}" method="post">
                        @csrf
                        <div class="form-group row mb-30 ">
                            <label class="col-form-label col-md-3">Month</label>
                            <div class="col-md-6">
                                <select name="month" class="select" required>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Employee</label>
                            <div class="col-md-6">
                                <select name="user" id="user-other" class="select" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" data-grade="{{ $user->grade->name }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Grade</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{ $users->first()->grade->name }}" id="grade-other">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Total Other Allowance (Rs.)</label>
                            <div class="col-md-6">
                                <input type="number" step="0.1" class="form-control" name="allowance_amount" required>
                            </div>
                        </div>


                        <div class="submit-section mt-2 mb-4">
                            <button class="btn btn-success submit-btn">Add</button>
                            <button class="btn btn-danger submit-btn">Clear</button>
                        </div>


                        <div class="row my-4">
                            <div class="col-lg-12">

                                <p>Allowance Hisytory</p>
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Grade</th>
                                                <th>Allowance ..</th>
                                                <th>Allowance ...</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>G1A</td>
                                                <td>12000.00</td>
                                                <td>7800.00</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>G3</td>
                                                <td>5500.00</td>
                                                <td>7800.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>






            <div class="tab-pane" id="report" role="tabpane5" aria-labelledby="report-tab">

                <div class="col-md-10 offset-md-1 mt-lg-3">

                    <form>

                        <div class="form-group row offset-md-4">
                            <label class="col-form-label col-md-1 ">Year</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table mb-0 datatable">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Overtime</th>
                                                <th>Attendance Allowance (Rs.)</th>
                                                <th>Other</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->other_allowance_report }}</td>
                                                <td>{{ $user->attendance_allowance_report }}</td>
                                                <td>{{ $user->ot_allowance_report }}</td>
                                            </tr>
                                        @endforeach

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section mb-5">
                            <!-- <button class="btn btn-info submit-btn">Calculate</button> -->
                            <button class="btn btn-primary submit-btn">Print</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>


</div>

    <script type="module">

        //OT
        var ot_rate = {{ $users->first()->grade->ot_rate }};

        var changeOtRate = function(evt) {
            var user_element = document.getElementById('user');
            var option= user_element.options[user_element.selectedIndex];
            ot_rate = option.getAttribute('data-rate');

            document.getElementById('normal_ot_amount').value = document.getElementById('normal_ot_hours').value * ot_rate;
            document.getElementById('double_ot_amount').value = document.getElementById('double_ot_hours').value * ot_rate;
        };

        var user_element = document.getElementById('user');
        user_element.addEventListener('change', changeOtRate, false);

        var normalOtCal = function(evt) {
            document.getElementById('normal_ot_amount').value = evt.target.value * ot_rate;
        };

        var normal_ot_hours_element = document.getElementById('normal_ot_hours');
        normal_ot_hours_element.addEventListener('input', normalOtCal, false);

        var doubleOtCal = function(evt) {
            document.getElementById('double_ot_amount').value = evt.target.value * ot_rate * 2;
        };

        var double_ot_hours_element = document.getElementById('double_ot_hours');
        double_ot_hours_element.addEventListener('input', doubleOtCal, false);


        //Attendance

        var changeGrade = function(evt) {
            var user_element_allowance = document.getElementById('user-allowance');
            var option= user_element_allowance.options[user_element_allowance.selectedIndex];
            var data_grade = option.getAttribute('data-grade');
            var data_attendance_allowance = option.getAttribute('data-attendance-allowance');
            var data_leaves = option.getAttribute('data-leaves');
            var data_calculated_attendance_allowance = option.getAttribute('data-calculated-attendance-allowance');

            document.getElementById('grade-allowance').value = data_grade;
            document.getElementById('available-attendance-allowance').value = data_attendance_allowance;
            document.getElementById('leave-days').value = data_leaves;
            document.getElementById('attendance-allowance').value = data_calculated_attendance_allowance;
        };

        var user_element_allowance = document.getElementById('user-allowance');
        user_element_allowance.addEventListener('input', changeGrade, false);

        //other
        var changeGradeOther = function(evt) {
            var user_element_other = document.getElementById('user-other');
            var option= user_element_other.options[user_element_other.selectedIndex];
            var data_grade = option.getAttribute('data-grade');

            document.getElementById('grade-other').value = data_grade;
        };

        var user_element_other = document.getElementById('user-other');
        user_element_other.addEventListener('input', changeGradeOther, false);
    </script>

@endsection
