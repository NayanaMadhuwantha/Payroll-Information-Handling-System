@extends('layouts.app')

@section('content')

<div class="page-wrapper">

            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Payslip</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('month-salary') }}">Salary</a></li>
                                <li class="breadcrumb-item active">Payslip</li>
                            </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <div class="btn-group btn-group-sm">
                                @isset($month_name)
                                    <button class="btn btn-white" onclick="downloadSlip()"><i class="fa fa-print fa-lg"></i> Print</button>
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-1">Month</label>
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

                @isset($month_name)
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="payslip-title">Payslip for the month of {{ $month_name }}</h4>
                                <div class="row">
                                    <div class="col-sm-6 m-b-20">
                                        <img src="assets/img/logo2.png" class="inv-logo" alt="">
                                        <ul class="list-unstyled mb-0">
                                            <li>Sri Lanka Tourism Development Authority</li>
                                            <li>80 Galle Rd</li>
                                            <li>Colombo 03</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 m-b-20">
                                        <div class="invoice-details">
                                            <h3 class="text-uppercase">Payslip #{{$salary->id}}</h3>
                                            <ul class="list-unstyled">
                                                <li>Salary Month: <span>{{ $month_name }}</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 m-b-20">
                                        <ul class="list-unstyled">
                                            <li>
                                                <h5 class="mb-0"><strong>{{ $user->full_name }}</strong></h5>
                                            </li>
                                            <li><span>{{ $user->position }}</span></li>
                                            <li>Employee ID: {{ $user->id }}</li>
                                            <li>Joining Date: {{ date('d-m-Y', strtotime($user->created_at)) }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <h4 class="m-b-10"><strong>Earnings</strong></h4>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Basic Salary</strong> <span class="float-end">{{ $salary->basic }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Attendance Allowance</strong> <span class="float-end">{{ $salary->attendance_allowance }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Other Allowance</strong> <span class="float-end">{{ $salary->other_allowance }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Normal Time</strong> <span class="float-end">{{ $salary->normal_ot }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Double Time</strong> <span class="float-end">{{ $salary->double_ot }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Total Earnings</strong> <span class="float-end"><strong>{{ $salary->total_salary }}</strong></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div>
                                            <h4 class="m-b-10"><strong>Deductions</strong></h4>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>EPF 8%</strong> <span class="float-end">{{ $salary->epf_8 }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>ETF 3%</strong> <span class="float-end">{{ $salary->etf_3 }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>No Pay</strong> <span class="float-end">{{ $salary->no_pay }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Welfare</strong> <span class="float-end">{{ $salary->welfare }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Other deductions</strong> <span class="float-end">{{ $salary->other_deductions }}</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <p><strong>Net Salary: {{ $salary->net_salary }}</strong> ({{ $salary_in_words }} only.)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="payslip-title">Payslip not generated yet</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endisset


            </div>

        </div>


<script type="application/javascript">
    var submit = function(evt) {
        var $form = $('<form action="{{ route('salarySlip') }}" method="GET">');
        $form.append('@csrf');

        $form.append('<input type="hidden" name="user_id" value="{{ $user->id }}" />');
        $form.append('<input type="hidden" name="month" value="'+evt.target.value+'" />');
        $form.appendTo($('body')).submit();
    };

    window.addEventListener('load',function(){
        var month_element = document.getElementById('month');
        month_element.addEventListener('input', submit, false);
    });

    function downloadSlip(){
        var month_element = document.getElementById('month');

        var $form = $('<form action="{{ route('salarySlip.download') }}" method="GET">');
        $form.append('@csrf');

        $form.append('<input type="hidden" name="user_id" value="{{ $user->id }}" />');
        $form.append('<input type="hidden" name="month" value="'+month_element.value+'" />');
        $form.appendTo($('body')).submit();
    }
</script>
@endsection
