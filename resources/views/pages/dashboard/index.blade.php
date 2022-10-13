@extends('layouts.app')

@section('content')

    <div class="page-wrapper">

        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Dashboard</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Welcome to SLTDA Payrol System</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row col-md-8 offset-md-2">

                @if(auth()->user()->position == 'admin')
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                    <a href="{{ route('advance') }}">
                        <div class="card dash-widget">
                            <div class="card-body p-4">
                                <span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
                                <div class="dash-widget-info">
                                    <h3 class="text-black" style="font-size: x-large;">Advance</h3>
                                    <!-- <span>Projects</span> -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                    <a href="{{ route('allowance') }}">
                        <div class="card dash-widget">
                            <div class="card-body p-4">
                                <span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
                                <div class="dash-widget-info">
                                    <h3 class="text-black" style="font-size: x-large;">Allowance</h3>
                                    <!-- <span>Clients</span> -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endif

                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                    <a href="{{ route('attendance') }}">
                        <div class="card dash-widget">
                            <div class="card-body p-4">
                                <span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
                                <div class="dash-widget-info">
                                    <h3 class="text-black" style="font-size: x-large;">Attendance</h3>
                                    <!-- <span>Tasks</span> -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                @if(auth()->user()->position == 'admin')
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                    <a href="{{ route('deduction') }}">
                        <div class="card dash-widget">
                            <div class="card-body p-4">
                                <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                                <div class="dash-widget-info">
                                    <h3 class="text-black" style="font-size: x-large;">Deduction</h3>
                                    <!-- <span>Employees</span> -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endif

                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                    <a href="{{ route('month-salary') }}">
                        <div class="card dash-widget">
                            <div class="card-body p-4">
                                <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                                <div class="dash-widget-info">
                                    <h3 class="text-black" style="font-size: x-large;">Salary</h3>
                                    <!-- <span>Employees</span> -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                    <a href="{{ route('leave') }}">
                        <div class="card dash-widget">
                            <div class="card-body p-4">
                                <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                                <div class="dash-widget-info">
                                    <h3 class="text-black" style="font-size: x-large;">Leave</h3>
                                    <!-- <span>Employees</span> -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                    <a href="{{ route('loan') }}">
                        <div class="card dash-widget">
                            <div class="card-body p-4">
                                <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                                <div class="dash-widget-info">
                                    <h3 class="text-black" style="font-size: x-large;">Loan</h3>
                                    <!-- <span>Employees</span> -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                    @if(auth()->user()->position == 'admin')
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                    <a href="{{ route('reports') }}">
                        <div class="card dash-widget">
                            <div class="card-body p-4">
                                <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                                <div class="dash-widget-info">
                                    <h3 class="text-black" style="font-size: x-large;">Reports</h3>
                                    <!-- <span>Employees</span> -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                    @endif
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                    <a href="{{ route('employee-profile.allProfiles') }}">
                        <div class="card dash-widget">
                            <div class="card-body p-4">
                                <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                                <div class="dash-widget-info">
                                    <h3 class="text-black" style="font-size: x-large;">Profiles</h3>
                                    <!-- <span>Employees</span> -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                    @if(auth()->user()->position == 'admin')
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                    <a href="{{ route('settings') }}">
                        <div class="card dash-widget">
                            <div class="card-body p-4">
                                <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                                <div class="dash-widget-info">
                                    <h3 class="text-black" style="font-size: x-large;">Settings</h3>
                                    <!-- <span>Employees</span> -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                        @endif


            </div>

        </div>

    </div>
@endsection
