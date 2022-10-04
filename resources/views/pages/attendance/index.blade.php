@extends('layouts.app')

@section('content')

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
