@extends('layouts.app')

@section('content')
<div id="app_salary_cal">
    <main class="tg-main tg-haslayout">
    


    <div class="main-wrapper">

<div class="header">

    <div class="header-left">
        <a href="admin-dashboard.html" class="logo">
            <img src="{{ asset('images/logo.png') }}" width="40" height="40" alt="">
        </a>
    </div>

    <a id="toggle_btn" href="javascript:void(0);">
        <span class="bar-icon">
<span></span>
        <span></span>
        <span></span>
        </span>
    </a>

    <div class="page-title-box">
        <h3>SLTDA | Sri Lanka Tourism Development Authority</h3>
    </div>

    <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

    <ul class="nav user-menu">

        <li class="nav-item">
            <div class="top-nav-search">
                <a href="javascript:void(0);" class="responsive-search">
                    <i class="fa fa-search"></i>
                </a>
                <form action="search.html">
                    <input class="form-control" type="text" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </li>







        <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <span class="user-img"><img src="{{ asset('images/profiles/avatar-21.jpg') }}" alt="">
<span class="status online"></span></span>
                <span>Admin</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.html">My Profile</a>
                <a class="dropdown-item" href="settings.html">Settings</a>
                <a class="dropdown-item" href="index.html">Logout</a>
            </div>
        </li>
    </ul>


    <div class="dropdown mobile-user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="settings.html">Settings</a>
            <a class="dropdown-item" href="index.html">Logout</a>
        </div>
    </div>

</div>


<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> </a>
                </li>
                <li class="menu-title">
                    <span>Employees</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-user"></i> <span> Profile </span> </a>
                </li>
                <li>
                    <a href="#"><i class="la la-file-text"></i> <span>Leave</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-rocket"></i> <span> Allowance</span></a>
                </li>
                <li><a href="termination.html"><i class="la la-times-circle"></i> <span>Deduction</span></a></li>
                <li class="submenu">
                    <a href="#"><i class="la la-money"></i> <span> Advance </span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-money"></i> <span> Loans </span></a>
                </li>
                <li>
                    <a href="clients.html"><i class="la la-users"></i> <span>Attendance</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-pie-chart"></i> <span> login History </span> </a>
                </li>
                <li>
                    <a href="settings.html"><i class="la la-cog"></i> <span>Settings</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-key"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="error-404.html">Login </a></li>
                        <li><a href="error-404.html">Register </a></li>
                        <li><a href="error-404.html">404 Error </a></li>
                        <li><a href="error-500.html">500 Error </a></li>
                    </ul>
                </li>
                <li><a href="promotion.html"><i class="la la-bullhorn"></i> <span>Salary</span></a></li>
                <li class="submenu">
                    <a href="#"><i class="la la-briefcase"></i> <span> Reports </span></a>
                </li>
            </ul>
        </div>
    </div>
</div>








<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Attendance</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Attendance</li>
                    </ul>
                </div>
            </div>
        </div>


        <ul class="nav nav-tabs nav-tabs-bottom align-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#markattendance" role="tab" aria-controls="home" aria-selected="true">Mark Attendance</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#attendancehanding" role="tab" aria-controls="profile" aria-selected="false">Mark Attendance Handing</a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane active" id="markattendance" role="tabpanel" aria-labelledby="markattendance-tab">
                <!-- <h4>Expense Approval Settings</h4> -->

                <div class="col-md-6 offset-md-3 mt-lg-5">

                    <!-- <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Change Password</h3>
                            </div>
                        </div>
                    </div> -->

                    <form>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Employee ID</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control">
                            </div>
                            <label class="col-form-label col-md-6 align-center">Time 1:11:15  Date 2022/07/06
                            </label>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">IN</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control">
                            </div>
                            <label class="col-form-label col-md-2">OUT</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control">
                            </div>
                        </div>



                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date </th>
                                                <th>Punch In</th>
                                                <th>Punch Out</th>
                                                <th>Production</th>
                                                <th>Break</th>
                                                <th>Overtime</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>19 Feb 2019</td>
                                                <td>10 AM</td>
                                                <td>7 PM</td>
                                                <td>9 hrs</td>
                                                <td>1 hrs</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>20 Feb 2019</td>
                                                <td>10 AM</td>
                                                <td>7 PM</td>
                                                <td>9 hrs</td>
                                                <td>1 hrs</td>
                                                <td>0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">ADD</button>
                        </div>
                    </form>

                </div>
            </div>







            <div class="tab-pane" id="attendancehanding" role="tabpanel" aria-labelledby="attendancehanding-tab">

                <div class="col-md-6 offset-md-3 mt-lg-5">

                    <form>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Search Employee ID</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date </th>
                                                <th>Punch In</th>
                                                <th>Punch Out</th>
                                                <th>Production</th>
                                                <th>Break</th>
                                                <th>Overtime</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>19 Feb 2019</td>
                                                <td>10 AM</td>
                                                <td>7 PM</td>
                                                <td>9 hrs</td>
                                                <td>1 hrs</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>20 Feb 2019</td>
                                                <td>10 AM</td>
                                                <td>7 PM</td>
                                                <td>9 hrs</td>
                                                <td>1 hrs</td>
                                                <td>0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="submit-section">
                            <button class="btn btn-success submit-btn">Mark Attendance</button>
                            <button class="btn btn-secondary submit-btn">Auto</button>
                            <button class="btn btn-primary submit-btn">Print</button>
                        </div>
                    </form>

                </div>

            </div>



        </div>



    </div>

</div>

</div>


        
    </main>
</div>
@endsection
