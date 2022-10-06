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

                            <form action="{{ route('update.password') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Enter User Name</label>
                                    <input type="text" class="form-control" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label>Enter Old password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label>Enter New password</label>
                                    <input type="password" class="form-control" name="new_password" required>
                                </div>
                                <div class="form-group">
                                    <label>Re-Enter New password</label>
                                    <input type="password" class="form-control" name="new_re_password" required>
                                </div>

                                <div>
                                    @isset($message)
                                        <label>{{ $message }}</label>
                                    @endisset
                                </div>

                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Update Password</button>
                                </div>
                            </form>
                        </div>
                    </div>







                    <div class="tab-pane" id="adduser" role="tabpanel" aria-labelledby="adduser-tab">

                        <div class="col-md-6 offset-md-3 mt-lg-5">

                            <form action="{{ route('add.user') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">User Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="username" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Full Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="full_name" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Name With Initials</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="name_with_initials">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Email</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Position</label>
                                    <div class="col-md-10">
                                        <select name="position" required>
                                            <option value="Web Developer">Web Developer</option>
                                            <option value="IT Manager">IT Manager</option>
                                            <option value="Marketing Manager">Marketing Manager</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">ETF EPF Number</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="etf_epf_number" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Date of birth</label>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control" name="date_of_birth" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Contact</label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control" name="contact">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Address</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">NIC number</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="nic_number" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Gender</label>
                                    <div class="col-md-10">
                                        <select name="gender" required>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Date hired</label>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control" name="date_hired">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Grade</label>
                                    <div class="col-md-10">
                                        <select name="grade_id">
                                            @foreach($grades as $grade)
                                                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                            @endforeach
                                        </select>
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
