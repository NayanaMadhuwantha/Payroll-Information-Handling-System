@extends('layouts.app')

@section('content')
<div id="app_salary_cal">
    <main class="tg-main tg-haslayout">
    <div class="main-wrapper">


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
        <div class="row">
            <div class="col-md-12">

                <!-- <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Blank Page</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ul>
                    </div>
                </div> -->

                <div class="page-header mb-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- <h3 class="page-title">Approval Settings</h3> -->
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Settings Page</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <ul class="nav nav-tabs nav-tabs-bottom align-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#updatepw" role="tab" aria-controls="home" aria-selected="true">Update Password</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#adduser" role="tab" aria-controls="profile" aria-selected="false">Add User</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="messages-tab" data-bs-toggle="tab" href="#rates" role="tab" aria-controls="messages" aria-selected="false">Rates</a>
                    </li>
                </ul>

                <div class="tab-content">

                    <div class="tab-pane active" id="updatepw" role="tabpanel" aria-labelledby="updatepw-tab">
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
                                <div class="form-group">
                                    <label>Enter User Name</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Enter Old password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Enter New password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Re-Enter New password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Update Password</button>
                                </div>
                            </form>
                        </div>
                    </div>







                    <div class="tab-pane" id="adduser" role="tabpanel" aria-labelledby="adduser-tab">

                        <div class="col-md-6 offset-md-3 mt-lg-5">

                            <form>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">User Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Position</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Create User</button>
                                </div>
                            </form>
                        </div>

                    </div>





                    <div class="tab-pane" id="rates" role="tabpanel" aria-labelledby="rates-tab">
                        <div class="col-md-6 offset-md-3 mt-lg-5">

                            <form>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Search Grade</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Salary Rate (Per Day)</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">EPF 8% Rate</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">EPF 12% Rate</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">ETF 3% Rate</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">OT Rate</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

</div>

    </main>
</div>
@endsection
