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
                                        <select name="position" class="form-select" required>
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
                                        <select name="gender" class="form-select" required>
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
                                        <select name="grade_id" class="form-select">
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

                            <form action="{{ route('update.grades') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Grade</label>
                                    <div class="col-md-9">
                                        <select name="grade_id" id="grade" class="form-select" required>
                                            @foreach($grades as $grade)
                                                <option value="{{ $grade->id }}"
                                                    data-per-day-salary-rate="{{ $grade->per_day_salary_rate }}"
                                                    data-epf-8-rate="{{ $grade->epf_8_rate }}"
                                                    data-epf-12-rate="{{ $grade->epf_12_rate }}"
                                                    data-etf-3-rate="{{ $grade->etf_3_rate }}"
                                                    data-ot-rate="{{ $grade->ot_rate }}"
                                                    data-attendance-allowance="{{ $grade->attendance_allowance }}"
                                                    data-basic-salary="{{ $grade->basic_salary }}"
                                                    data-maximum-advance="{{ $grade->maximum_advance }}"
                                                    data-maximum-loan="{{ $grade->maximum_loan }}"
                                                    data-salary-rate="{{ $grade->salary_rate }}"
                                                >{{ $grade->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Salary Rate (Per Day)</label>
                                    <div class="col-md-9">
                                        <input type="number" id="per_day_salary_rate" value="{{ $grades->first()->per_day_salary_rate }}" class="form-control" name="per_day_salary_rate" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">EPF 8% Rate</label>
                                    <div class="col-md-9">
                                        <input type="number" id="epf_8_rate" value="{{ $grades->first()->epf_8_rate }}" class="form-control" name="epf_8_rate" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">EPF 12% Rate</label>
                                    <div class="col-md-9">
                                        <input type="number" id="epf_12_rate" value="{{ $grades->first()->epf_12_rate }}" class="form-control" name="epf_12_rate" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">ETF 3% Rate</label>
                                    <div class="col-md-9">
                                        <input type="number" id="etf_3_rate" value="{{ $grades->first()->etf_3_rate }}" class="form-control" name="etf_3_rate" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">OT Rate</label>
                                    <div class="col-md-9">
                                        <input type="number" id="ot_rate" value="{{ $grades->first()->ot_rate }}" class="form-control" name="ot_rate" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Attendance allowance</label>
                                    <div class="col-md-9">
                                        <input type="number" id="attendance_allowance" value="{{ $grades->first()->attendance_allowance }}" class="form-control" name="attendance_allowance">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Basic salary</label>
                                    <div class="col-md-9">
                                        <input type="number" id="basic_salary" value="{{ $grades->first()->basic_salary }}" class="form-control" name="basic_salary">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Maximum advance</label>
                                    <div class="col-md-9">
                                        <input type="number" id="maximum_advance" value="{{ $grades->first()->maximum_advance }}" class="form-control" name="maximum_advance">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Maximum loan</label>
                                    <div class="col-md-9">
                                        <input type="number" id="maximum_loan" value="{{ $grades->first()->maximum_loan }}" class="form-control" name="maximum_loan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Salary rate</label>
                                    <div class="col-md-9">
                                        <input type="number" id="salary_rate" value="{{ $grades->first()->salary_rate }}" class="form-control" name="salary_rate">
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

<script type="module">

    var changeInputValues = function(evt) {
        var grade_element = document.getElementById('grade');
        var option= grade_element.options[grade_element.selectedIndex];

        var data_per_day_salary_rate     = option.getAttribute('data-per-day-salary-rate');
        var data_epf_8_rate              = option.getAttribute('data-epf-8-rate');
        var data_epf_12_rate             = option.getAttribute('data-epf-12-rate');
        var data_etf_3_rate              = option.getAttribute('data-etf-3-rate');
        var data_ot_rate                 = option.getAttribute('data-ot-rate');
        var data_attendance_allowance    = option.getAttribute('data-attendance-allowance');
        var data_basic_salary            = option.getAttribute('data-basic-salary');
        var data_maximum_advance         = option.getAttribute('data-maximum-advance');
        var data_maximum_loan            = option.getAttribute('data-maximum-loan');
        var data_salary_rate             = option.getAttribute('data-salary-rate');

        document.getElementById('per_day_salary_rate').value = data_per_day_salary_rate;
        document.getElementById('epf_8_rate').value = data_epf_8_rate;
        document.getElementById('epf_12_rate').value = data_epf_12_rate;
        document.getElementById('etf_3_rate').value = data_etf_3_rate;
        document.getElementById('ot_rate').value = data_ot_rate;
        document.getElementById('attendance_allowance').value = data_attendance_allowance;
        document.getElementById('basic_salary').value = data_basic_salary;
        document.getElementById('maximum_advance').value = data_maximum_advance;
        document.getElementById('maximum_loan').value = data_maximum_loan;
        document.getElementById('salary_rate').value = data_salary_rate;
    };

    var grade_element = document.getElementById('grade');
    grade_element.addEventListener('input', changeInputValues, false);

</script>
@endsection
