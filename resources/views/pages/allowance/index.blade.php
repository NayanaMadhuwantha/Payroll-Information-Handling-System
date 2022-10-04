@extends('layouts.app')

@section('content')

<div class="page-wrapper">

    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Allowance</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Allowance</li>
                    </ul>
                </div>
            </div>
        </div>


        <ul class="nav nav-tabs nav-tabs-bottom align-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#overtime" role="tab" aria-controls="home" aria-selected="true">Overtime</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#attallowance" role="tab" aria-controls="profile" aria-selected="false">Attendance Allowance</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#othallowance" role="tab" aria-controls="profile" aria-selected="false">Other Allowance</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#report" role="tab" aria-controls="profile" aria-selected="false">Report</a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane active" id="overtime" role="tabpanel" aria-labelledby="overtime-tab">
                <!-- <h4>Expense Approval Settings</h4> -->

                <div class="col-md-8 offset-md-2 mt-lg-2">

                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Overtime Form</h3>
                            </div>
                        </div>
                    </div>



                    <form>
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
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Normal OT Hours</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control">
                            </div>
                            <label class="col-form-label col-md-2">Double OT Hours</label>
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


                        <div class="submit-section mt-2 mb-4">
                            <button class="btn btn-success submit-btn">Add</button>
                            <button class="btn btn-danger submit-btn">Clear</button>
                        </div>

                        <p>Logged As: Account analyst</p>

                    </form>
                </div>
            </div>







            <div class="tab-pane" id="attallowance" role="tabpane2" aria-labelledby="attallowance-tab">

                <div class="col-md-6 offset-md-3 mt-lg-2">

                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Attendance Allowance</h3>
                            </div>
                        </div>
                    </div>

                    <form>
                        <div class="form-group row mb-30 ">
                            <label class="col-form-label col-md-3">Month</label>
                            <div class="col-md-6">
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
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Grade</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Available Attendance Allowance (Rs.)</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">No. of Leave Days</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Attendance Allowance (Rs.)</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="submit-section mt-2 mb-4">
                            <!-- <button class="btn btn-success submit-btn">Add</button> -->
                            <button class="btn btn-danger submit-btn">Clear</button>
                        </div>

                        <p>Logged As: Account analyst</p>

                    </form>
                </div>
            </div>





            <div class="tab-pane" id="othallowance" role="tabpane3" aria-labelledby="othallowance-tab">
                <!-- <h4>Expense Approval Settings</h4> -->

                <div class="col-md-6 offset-md-3 mt-lg-2">

                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Other Allowance</h3>
                            </div>
                        </div>
                    </div>



                    <form>
                        <div class="form-group row mb-30 ">
                            <label class="col-form-label col-md-3">Month</label>
                            <div class="col-md-6">
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
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Grade</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Total Other Allowance (Rs.)</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>


                        <div class="submit-section mt-2 mb-4">
                            <button class="btn btn-success submit-btn">Add</button>
                            <button class="btn btn-danger submit-btn">Clear</button>
                        </div>


                        <div class="row my-4">
                            <div class="col-lg-12">

                                <p>Allowance Hisytory</p>
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Grade</th>
                                                <th>Allowance ..</th>
                                                <th>Allowance ...</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>G1A</td>
                                                <td>12000.00</td>
                                                <td>7800.00</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>G3</td>
                                                <td>5500.00</td>
                                                <td>7800.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>






            <div class="tab-pane" id="report" role="tabpane5" aria-labelledby="report-tab">

                <div class="col-md-10 offset-md-1 mt-lg-3">

                    <form>

                        <div class="form-group row offset-md-4">
                            <label class="col-form-label col-md-1 ">Year</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table mb-0 datatable">
                                        <thead>
                                            <tr>

                                                <th>Employee No</th>
                                                <th>Overtime</th>
                                                <th>Attendance Allowance (Rs.)</th>
                                                <th>Other</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>12</td>
                                                <td>3500.00</td>
                                                <td>Dsas</td>
                                            </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section mb-5">
                            <!-- <button class="btn btn-info submit-btn">Calculate</button> -->
                            <button class="btn btn-primary submit-btn">Print</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>


</div>

@endsection
