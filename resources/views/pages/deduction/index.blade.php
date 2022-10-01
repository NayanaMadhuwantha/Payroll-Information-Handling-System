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
                    <h3 class="page-title">Deduction</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Deduction</li>
                    </ul>
                </div>
            </div>
        </div>


        <ul class="nav nav-tabs nav-tabs-bottom align-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#deduction1" role="tab" aria-controls="home" aria-selected="true">Deduction I</a>
            </li>
            <!-- <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#deduction2" role="tab" aria-controls="profile" aria-selected="false">Deduction II</a>
            </li> -->
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#abesent" role="tab" aria-controls="profile" aria-selected="false">Absent</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#food" role="tab" aria-controls="profile" aria-selected="false">Food</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#report" role="tab" aria-controls="profile" aria-selected="false">Report</a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane active" id="deduction1" role="tabpanel" aria-labelledby="deduction1-tab">
                <!-- <h4>Expense Approval Settings</h4> -->

                <div class="col-md-10 offset-md-1 mt-lg-5">

                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Deduction I Form</h3>
                            </div>
                        </div>
                    </div>



                    <form>
                        <div class="form-group row mb-30 offset-md-3">
                            <label class="col-form-label col-md-2">Search Employee ID</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-1">Month</label>
                            <div class="col-md-2">
                                <select class="select">
                                    <option>Select Month</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    </select>
                            </div>
                            <label class="col-form-label col-md-1">Employee ID</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control">
                            </div>
                            <label class="col-form-label col-md-1">No of Days</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control">
                            </div>
                            <label class="col-form-label col-md-1">Per Amount (Rs.)</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="submit-section mt-2 mb-4">
                            <button class="btn btn-success submit-btn">Add</button>
                            <button class="btn btn-danger submit-btn">Clear</button>
                        </div>


                        <div class="row my-4">
                            <div class="col-lg-12">

                                <p>Aprove Leave Hisytory</p>
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Employee No</th>
                                                <th>No of Days</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>656565</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>656565</td>
                                                <td>3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <p>Logged As: Account analyst</p>

                    </form>
                </div>
            </div>







            <!-- <div class="tab-pane" id="deduction2" role="tabpane2" aria-labelledby="deduction2-tab">

                <div class="col-md-10 offset-md-1 mt-lg-5">

                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Deduction II Form</h3>
                            </div>
                        </div>
                    </div>

                    <form>
                        <div class="form-group row mb-30 offset-md-3">
                            <label class="col-form-label col-md-2">Search Employee ID</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-1">Month</label>
                            <div class="col-md-2">
                                <select class="select">
                                    <option>Select Month</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    </select>
                            </div>
                            <label class="col-form-label col-md-1">Employee No</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control">
                            </div>
                            <label class="col-form-label col-md-1">Reason</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control">
                            </div>
                            <label class="col-form-label col-md-1">Amount (Rs.)</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="submit-section mt-2 mb-4">
                            <button class="btn btn-success submit-btn">Add</button>
                            <button class="btn btn-danger submit-btn">Clear</button>
                        </div>


                        <div class="row my-4">
                            <div class="col-lg-12">

                                <p>Aprove Leave Hisytory</p>
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Employee No</th>
                                                <th>Reason</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>656565</td>
                                                <td>Reason 01</td>
                                                <td>7800.00</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>656565</td>
                                                <td>Reason 01</td>
                                                <td>7800.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <p>Logged As: Account analyst</p>

                    </form>
                </div>
            </div> -->





            <div class="tab-pane" id="abesent" role="tabpane3" aria-labelledby="abesent-tab">
                <!-- <h4>Expense Approval Settings</h4> -->

                <div class="col-md-8 offset-md-2 mt-lg-5">

                    <!-- <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Loan Aprove Form</h3>
                            </div>
                        </div>
                    </div> -->



                    <form>
                        <!-- <div class="form-group row">
                            <label class="col-form-label col-md-2">Search Employee ID</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control">
                            </div>
                        </div> -->
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
                            <label class="col-form-label col-md-2">Rate</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control">
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Employee No</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control">
                            </div>
                            <label class="col-form-label col-md-2">Grade</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">No. of Attend Days</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control">
                            </div>
                            <label class="col-form-label col-md-2">No. of Absent Days</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">No. of Leaves</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control">
                            </div>
                            <label class="col-form-label col-md-2">Nopay (Rs.)</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control">
                            </div>
                        </div>


                        <div class="submit-section mt-2 mb-4">
                            <button class="btn btn-warning submit-btn">Calculate</button>
                            <button class="btn btn-success submit-btn">Confirm</button>
                            <button class="btn btn-danger submit-btn">Clear</button>
                        </div>

                    </form>
                </div>
            </div>








            <div class="tab-pane" id="food" role="tabpane4" aria-labelledby="food-tab">
                <div class="col-md-10 offset-md-1 mt-lg-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Food Deduction Form</h3>
                            </div>
                        </div>
                    </div>

                    <form>
                        <div class="form-group row mb-30 offset-md-3">
                            <label class="col-form-label col-md-2">Search Employee ID</label>
                            <div class="col-md-6">
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
                            <label class="col-form-label col-md-2">Employee No</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control">
                            </div>

                        </div>
                        <div class="form-group row">

                            <label class="col-form-label col-md-2">Per Amount (Rs.)</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control">
                            </div>
                            <label class="col-form-label col-md-2">No. of Days</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control">
                            </div>
                        </div>


                        <div class="submit-section mt-2 mb-4">
                            <button class="btn btn-success submit-btn">Add</button>
                            <button class="btn btn-danger submit-btn">Clear</button>
                        </div>


                        <div class="row my-4">
                            <div class="col-lg-12">

                                <p>Aprove Leave Hisytory</p>
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Employee No</th>
                                                <th>Amount (Rs.)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>656565</td>
                                                <td>7800.00</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>656565</td>
                                                <td>7800.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <p>Logged As: Account analyst</p>

                    </form>
                </div>
            </div>






            <div class="tab-pane" id="report" role="tabpane5" aria-labelledby="report-tab">

                <div class="col-md-10 offset-md-1 mt-lg-3">

                    <form>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Month</label>
                            <div class="col-md-3">
                                <select class="select">
                                    <option>Select Month</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Search Employee No</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <label class="col-form-label col-md-3">Total Other Deductions: Rs. 0.00</label>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table mb-0 datatable">
                                        <thead>
                                            <tr>
                                                <th>Deduction No</th>
                                                <th>Employee No</th>
                                                <th>Month</th>
                                                <th>Deduction Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>2123243</td>
                                                <td>3</td>
                                                <td>Deduction II</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>2123243</td>
                                                <td>3</td>
                                                <td>Deduction II</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>2123243</td>
                                                <td>3</td>
                                                <td>Deduction II</td>
                                            </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section mb-5">
                            <button class="btn btn-info submit-btn">Calculate</button>
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
