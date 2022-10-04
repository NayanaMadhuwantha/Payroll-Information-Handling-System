@extends('layouts.app')

@section('content')

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
@endsection
