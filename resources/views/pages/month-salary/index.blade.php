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
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Salary</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">salary</li>
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




                <div class="row">
                    <div class="col-md-6">
                        <!-- <div class="card profile-box flex-fill"> -->
                        <!-- <div class="card-body"> -->


                        <form>
                            <div class="form-group row mb-30">
                                <label class="col-form-label col-md-4">Search Employee ID</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Month</label>
                                <div class="col-md-8">
                                    <select class="select">
                                <option>Select Month</option>
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                </select>
                                </div>

                            </div>
                        </form>

                        <!-- </div> -->
                        <!-- </div> -->
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Contribution</h3>
                                <hr>
                                <form>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">EPF 8% (Rs.)</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="col-form-label col-md-2">EPF 12% (Rs.)</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">ETF 3% (Rs.)</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                </form>

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
                                <form>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Attendance Allowance (Rs.)</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="col-form-label col-md-2">Other Allowance (Rs.)</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Normal OT Amount(Rs.)</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="col-form-label col-md-2">Double OT Amount(Rs.)</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <!-- 
                                    <div class="submit-section mt-2 mb-4">
                                        <button class="btn btn-success submit-btn">Add</button>
                                        <button class="btn btn-danger submit-btn">Clear</button>
                                    </div> -->

                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Deduction</h3>
                                <hr>
                                <form>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Nopay (Rs.)</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="col-form-label col-md-2">Other Deduction (Rs.)</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Walfair (Rs.)</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">

                                <form>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Basic Salary (Rs.)</label>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="col-form-label col-md-2">EPF Gross (Rs.)</label>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="col-form-label col-md-2">Gross Wage (Rs.)</label>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Net Salary (Rs.)</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="col-form-label col-md-2">Total Salary (Rs.)</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-12  mt-lg-2">
                    <form>
                        <div class="submit-section mt-2 mb-4">
                            <button class="btn btn-info submit-btn">Calculate</button>
                            <button class="btn btn-success submit-btn">Save</button>
                            <button class="btn btn-success submit-btn">Generate Slip</button>
                            <button class="btn btn-danger submit-btn">Clear</button>
                        </div>
                        <p>Logged As: Account analyst</p>
                    </form>
                </div>

            </div>

        </div>

    </div>




        
    </main>
</div>
@endsection
