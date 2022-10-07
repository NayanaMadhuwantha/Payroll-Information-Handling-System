@extends('layouts.app')

@section('content')

        <div class="page-wrapper">

            <div class="content container-fluid">

            <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">All Reports</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>

            <div class="row col-md-8 offset-md-2">

<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
    <a href="{{ route('allowanceReport') }}">
        <div class="card dash-widget">
            <div class="card-body p-4">
                <span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
                <div class="dash-widget-info">
                    <h3 class="text-black" style="font-size: x-large;">Monthly Allowance Report</h3>
                    <!-- <span>Projects</span> -->
                </div>
            </div>
        </div>
    </a>
</div>

<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
    <a href="monthly-leave-report.html">
        <div class="card dash-widget">
            <div class="card-body p-4">
                <span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
                <div class="dash-widget-info">
                    <h3 class="text-black" style="font-size: x-large;">Monthly Leave Report</h3>
                    <!-- <span>Clients</span> -->
                </div>
            </div>
        </div>
    </a>
</div>
<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
    <a href="monthly-overtime-report.html">
        <div class="card dash-widget">
            <div class="card-body p-4">
                <span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
                <div class="dash-widget-info">
                    <h3 class="text-black" style="font-size: x-large;">Monthly Overtime Report</h3>
                    <!-- <span>Tasks</span> -->
                </div>
            </div>
        </div>
    </a>
</div>
<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
    <a href="monthly-deduction-report.html">
        <div class="card dash-widget">
            <div class="card-body p-4">
                <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                <div class="dash-widget-info">
                    <h3 class="text-black" style="font-size: x-large;">Monthly Deduction Report</h3>
                    <!-- <span>Employees</span> -->
                </div>
            </div>
        </div>
    </a>
</div>
<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
    <a href="monthly-salary-report.html">
        <div class="card dash-widget">
            <div class="card-body p-4">
                <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                <div class="dash-widget-info">
                    <h3 class="text-black" style="font-size: x-large;">Monthly Salary Report</h3>
                    <!-- <span>Employees</span> -->
                </div>
            </div>
        </div>
    </a>
</div>
<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
    <a href="epf-etf-report.html">
        <div class="card dash-widget">
            <div class="card-body p-4">
                <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                <div class="dash-widget-info">
                    <h3 class="text-black" style="font-size: x-large;">EPF/ETF Report</h3>
                    <!-- <span>Employees</span> -->
                </div>
            </div>
        </div>
    </a>
</div>
</div>

            </div>

        </div>
@endsection
