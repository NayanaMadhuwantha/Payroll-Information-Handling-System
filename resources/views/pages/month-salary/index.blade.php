@extends('layouts.app')

@section('content')
    <div class="page-wrapper">

        <div class=" container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Salary</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('month-salary') }}">Salary</a></li>
                            <li class="breadcrumb-item active">Month Salary</li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>


            <!-- <form>
                <div class="form-group row mb-30">
                    <label class="col-form-label col-md-2">Search Employee ID</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Month</label>
                    <div class="col-md-4">
                        <select class="select">
                            <option>Select Month</option>
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            </select>
                    </div>

                </div>
            </form> -->


            <form action="{{ route('month-salary.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row mb-30">
                            <label class="col-form-label col-md-4">Employee</label>
                            <div class="col-md-8">
                                <select class="select form-select" name="user" id="user">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}"
                                                data-rate="{{ $user->grade->ot_rate }}"
                                                data-per-day-salary-rate="{{ $user->grade->per_day_salary_rate }}"
                                                data-epf-8-rate="{{ $user->grade->epf_8_rate }}"
                                                data-epf-12-rate="{{ $user->grade->epf_12_rate }}"
                                                data-etf-3-rate="{{ $user->grade->etf_3_rate }}"
                                                data-ot-rate="{{ $user->grade->ot_rate }}"
                                                data-attendance-allowance="{{ $user->grade->attendance_allowance }}"
                                                data-basic-salary="{{ $user->grade->basic_salary }}"
                                                data-maximum-advance="{{ $user->grade->maximum_advance }}"
                                                data-maximum-loan="{{ $user->grade->maximum_loan }}"
                                                data-salary-rate="{{ $user->grade->salary_rate }}"
                                                @isset($selected_user_id)
                                                @if($selected_user_id == $user->id)
                                                selected
                                                @endif
                                                @endisset
                                        >{{ $user->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Month</label>
                            <div class="col-md-3">
                                <select name="month" class="select form-select" id="month" required>
                                    <option value="1" @if($month == 1) selected @endif>January</option>
                                    <option value="2" @if($month == 2) selected @endif>February</option>
                                    <option value="3" @if($month == 3) selected @endif>March</option>
                                    <option value="4" @if($month == 4) selected @endif>April</option>
                                    <option value="5" @if($month == 5) selected @endif>May</option>
                                    <option value="6" @if($month == 6) selected @endif>June</option>
                                    <option value="7" @if($month == 7) selected @endif>July</option>
                                    <option value="8" @if($month == 8) selected @endif>August</option>
                                    <option value="9" @if($month == 9) selected @endif>September</option>
                                    <option value="10" @if($month == 10) selected @endif>October</option>
                                    <option value="11" @if($month == 11) selected @endif>November</option>
                                    <option value="12" @if($month == 12) selected @endif>December</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Calculate all</label>
                            <div class="col-md-3">
                                <input type="checkbox" name="calculate_all">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Contribution</h3>
                                <hr>


                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">EPF 8% (Rs.)</label>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" name="epf_8" id="epf_8" disabled required>
                                    </div>
                                    <label class="col-form-label col-md-2">EPF 12% (Rs.)</label>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" name="epf_12" id="epf_12" disabled required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">ETF 3% (Rs.)</label>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" name="epf_3" id="epf_3" disabled required>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Allowance</h3>
                                <hr>


                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Attendance Allowance (Rs.)</label>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" name="attendance_allowance" id="attendance_allowance" value="{{ $attendance_allowance }}" required>
                                    </div>
                                    <label class="col-form-label col-md-2">Other Allowance (Rs.)</label>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" name="other_allowance" id="other_allowance" value="{{ $other_allowance }}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Normal OT Amount(Rs.)</label>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" name="normal_ot" id="normal_ot" value="{{ $normal_ot_amount }}" required>
                                    </div>
                                    <label class="col-form-label col-md-2">Double OT Amount(Rs.)</label>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" name="double_ot" id="double_ot" value="{{ $double_ot_amount }}" required>
                                    </div>
                                </div>

                                <!--
                                <div class="submit-section mt-2 mb-4">
                                    <button class="btn btn-success submit-btn">Add</button>
                                    <button class="btn btn-danger submit-btn">Clear</button>
                                </div> -->


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Deduction</h3>
                                <hr>


                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">No pay (Rs.)</label>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" name="no_pay" id="no_pay" value="{{ $nopay }}" required>
                                    </div>
                                    <label class="col-form-label col-md-2">Other Deduction (Rs.)</label>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" name="other_deductions" value="{{ $welfare }}" id="other_deductions" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Walfair (Rs.)</label>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" name="welfare" id="welfare" value="{{ $other }}" required>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">


                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Basic Salary (Rs.)</label>
                                    <div class="col-md-2">
                                        <input type="number" class="form-control" value="{{ $basic_salary }}" name="basic" id="basic" disabled required>
                                    </div>
                                    <label class="col-form-label col-md-2">EPF Gross (Rs.)</label>
                                    <div class="col-md-2">
                                        <input type="number" step="0.001" class="form-control" name="epf_gross" id="epf_gross" required>
                                    </div>
                                    <label class="col-form-label col-md-2">Gross Wage (Rs.)</label>
                                    <div class="col-md-2">
                                        <input type="number" step="0.001" class="form-control" name="gross_wage" id="gross_wage" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Net Salary (Rs.)</label>
                                    <div class="col-md-4">
                                        <input type="number" step="0.001" class="form-control" name="net_salary" id="net_salary" required>
                                    </div>
                                    <label class="col-form-label col-md-2">Total Salary (Rs.)</label>
                                    <div class="col-md-4">
                                        <input type="number" step="0.001" class="form-control" name="total_salary" id="total_salary" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-12  mt-lg-2">
                    <div class="submit-section mt-2 mb-4">
                        <a class="btn btn-info submit-btn" id="calculate" onclick="calculate()">Calculate</a>
                        <button type="submit" class="btn btn-success submit-btn">Save</button>
<!--                        <button class="btn btn-success submit-btn">Generate Slip</button>
                        <button class="btn btn-danger submit-btn">Clear</button>-->
                    </div>
                    <p>Logged As: Account analyst</p>
                </div>
            </form>
        </div>

    </div>


    <script type="application/javascript">
        function calculate() {
            var basic = isNaN(parseFloat(document.getElementById('basic').value)) ? 0 : parseFloat(document.getElementById('basic').value);

            document.getElementById('epf_8').value = basic * 8 / 100;
            document.getElementById('epf_12').value = basic * 12 / 100;
            document.getElementById('epf_3').value = basic * 3 / 100;

            var attendance_allowance = isNaN(parseFloat(document.getElementById('attendance_allowance').value)) ? 0 : parseFloat(document.getElementById('attendance_allowance').value);
            var other_allowance = isNaN(parseFloat(document.getElementById('other_allowance').value)) ? 0 : parseFloat(document.getElementById('other_allowance').value);
            var normal_ot = isNaN(parseFloat(document.getElementById('normal_ot').value)) ? 0 : parseFloat(document.getElementById('normal_ot').value);
            var double_ot = isNaN(parseFloat(document.getElementById('double_ot').value)) ? 0 : parseFloat(document.getElementById('double_ot').value);

            var allowance = attendance_allowance + other_allowance + normal_ot + double_ot;

            var no_pay = isNaN(parseFloat(document.getElementById('no_pay').value)) ? 0 : parseFloat(document.getElementById('no_pay').value);
            var other_deductions = isNaN(parseFloat(document.getElementById('other_deductions').value)) ? 0 : parseFloat(document.getElementById('other_deductions').value);
            var welfare = isNaN(parseFloat(document.getElementById('welfare').value)) ? 0 : parseFloat(document.getElementById('welfare').value);

            var deductions = no_pay + other_deductions + welfare;

            document.getElementById('epf_gross').value = basic * 20 / 100;

            document.getElementById('gross_wage').value = allowance - deductions;

            var epf_8 = isNaN(parseFloat(document.getElementById('epf_8').value)) ? 0 : parseFloat(document.getElementById('epf_8').value);
            var gross_wage = isNaN(parseFloat(document.getElementById('gross_wage').value)) ? 0 : parseFloat(document.getElementById('gross_wage').value);

            document.getElementById('net_salary').value = basic - epf_8 + gross_wage;

            document.getElementById('total_salary').value = basic + gross_wage + (basic * 23 / 100);
        }

        var submit = function(evt) {
            var $form = $('<form action="{{ route('month-salary') }}" method="GET">');
            $form.append('@csrf');
            $form.append('<input name="user_id" value="'+evt.target.value+'" />');
            $form.append('<input type="hidden" name="month" value="{{ $month }}" />');
            $form.appendTo($('body')).submit();
        };

        window.addEventListener('load',function(){
            var user_element = document.getElementById('user');
            user_element.addEventListener('input', submit, false);
        });


        var submitMonth = function(evt) {
            var $form = $('<form action="{{ route('month-salary') }}" method="GET">');
            $form.append('@csrf');

            $form.append('<input type="hidden" name="user_id" value="{{ $selected_user_id }}" />');
            $form.append('<input type="hidden" name="month" value="'+evt.target.value+'" />');
            $form.appendTo($('body')).submit();
        };

        window.addEventListener('load',function(){
            var month_element = document.getElementById('month');
            month_element.addEventListener('input', submitMonth, false);
        });
    </script>
@endsection
