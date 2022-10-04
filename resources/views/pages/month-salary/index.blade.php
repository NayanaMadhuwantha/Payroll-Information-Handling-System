@extends('layouts.app')

@section('content')
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
@endsection
