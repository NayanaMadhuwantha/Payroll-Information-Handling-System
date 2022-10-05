@extends('layouts.app')

@section('content')

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



                    <form action="{{ route('deduction.store') }}" method="post">
                        @csrf
                        <div class="form-group row mb-30 offset-md-3">
                            <label class="col-form-label col-md-2">Employee</label>
                            <div class="col-md-6">
                                <select name="user" id="user" class="select" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" data-grade="{{ $user->grade->name }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-1">Month</label>
                            <div class="col-md-3">
                                <select name="month" class="select" required>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <label class="col-form-label col-md-1">Date</label>
                            <div class="col-md-3">
                                <input type="date" class="form-control" name="date" required>
                            </div>

                            <label class="col-form-label col-md-1">Reason</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="reason">
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-1">No of Days</label>
                            <div class="col-md-3">
                                <input type="number" class="form-control" name="number_of_dates" required>
                            </div>
                            <label class="col-form-label col-md-1">Per Amount (Rs.)</label>
                            <div class="col-md-3">
                                <input type="number" step="0.1" class="form-control" name="per_amount" required>
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



                    <form action="{{ route('absent.store') }}" method="post">
                        @csrf
                        <!-- <div class="form-group row">
                            <label class="col-form-label col-md-2">Search Employee ID</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control">
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Month</label>
                            <div class="col-md-4">
                                <select name="month" class="select" required>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <label class="col-form-label col-md-2">Rate</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="rate" required>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Employee</label>
                            <div class="col-md-4">
                                <select name="user" id="user" class="select" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" data-grade="{{ $user->grade->name }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="col-form-label col-md-2">No. of Absent Days</label>
                            <div class="col-md-4">
                                <input type="number" class="form-control" name="number_of_absents" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">No. of Leaves</label>
                            <div class="col-md-4">
                                <input type="number" class="form-control" name="number_of_leaves" required>
                            </div>
                            <label class="col-form-label col-md-2">Nopay (Rs.)</label>
                            <div class="col-md-4">
                                <input type="number" class="form-control" name="full_amount" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Date</label>
                            <div class="col-md-4">
                                <input type="date" class="form-control" name="date" required>
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

                    <form action="{{ route('food-deduction.store'  ) }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Month</label>
                            <div class="col-md-4">
                                <select name="month" class="select" required>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <label class="col-form-label col-md-2">Employee</label>
                            <div class="col-md-4">
                                <select name="user" id="user" class="select" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" data-grade="{{ $user->grade->name }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="form-group row">

                            <label class="col-form-label col-md-2">Per Amount (Rs.)</label>
                            <div class="col-md-4">
                                <input type="number" class="form-control" name="per_amount" required>
                            </div>
                            <label class="col-form-label col-md-2">No. of Days</label>
                            <div class="col-md-4">
                                <input type="number" class="form-control" name="number_of_dates" required>
                            </div>
                        </div>

                        <div class="form-group row">

                            <label class="col-form-label col-md-2">Reason</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="reason" >
                            </div>
                            <label class="col-form-label col-md-2">Date</label>
                            <div class="col-md-4">
                                <input type="date" class="form-control" name="date" required>
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
                                <select name="month" class="select" required>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
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
                                        @foreach($deductions as $deduction)
                                            <tr>
                                                <td>{{ $deduction->id }}</td>
                                                <td>{{ $deduction->user_id }}</td>
                                                <td>{{ $deduction->month }}</td>
                                                <td>{{ $deduction->type->name}}</td>
                                            </tr>
                                        @endforeach
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
@endsection
