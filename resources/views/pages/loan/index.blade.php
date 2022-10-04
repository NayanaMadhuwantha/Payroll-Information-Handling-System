@extends('layouts.app')

@section('content')

        <div class="page-wrapper">

            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Loans</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Loans</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <ul class="nav nav-tabs nav-tabs-bottom align-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#aproveloan" role="tab" aria-controls="home" aria-selected="true">Aprove Loan</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#loanreport" role="tab" aria-controls="profile" aria-selected="false">Report</a>
                    </li>
                </ul>

                <div class="tab-content">

                    <div class="tab-pane active" id="aproveloan" role="tabpanel" aria-labelledby="aproveloan-tab">
                        <!-- <h4>Expense Approval Settings</h4> -->

                        <div class="col-md-8 offset-md-2 mt-lg-5">

                            <div class="page-header">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="page-title">Loan Aprove Form</h3>
                                    </div>
                                </div>
                            </div>



                            <form>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Search Employee ID</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee No</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control">
                                    </div>
                                    <label class="col-form-label col-md-2">Issued Date</label>
                                    <div class="col-md-4">
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" value="01-01-2019" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Loan No</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control">
                                    </div>
                                    <label class="col-form-label col-md-2">Maximum Amount (Rs.)</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Required Amount (Rs.)</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control">
                                    </div>
                                    <label class="col-form-label col-md-2">Monthly Installment (Rs.)</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Duration (Months)</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>


                                <div class="submit-section mt-2 mb-4">
                                    <button class="btn btn-success submit-btn">Apply</button>
                                    <button class="btn btn-danger submit-btn">Cancel</button>
                                </div>

                            </form>

                        </div>

                    </div>







                    <div class="tab-pane" id="loanreport" role="tabpanel" aria-labelledby="loanreport-tab">

                        <div class="col-md-10 offset-md-1 mt-lg-3">

                            <form>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Search Employee No</label>
                                    <div class="col-md-9">
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
                                                        <th>Month</th>
                                                        <th>Advance Amount (Rs.)</th>
                                                        <th class="text-center">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>8000.00</td>
                                                        <td class="text-center">
                                                            <div class="action-label">
                                                                <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                                                    <i class="fa fa-dot-circle-o text-purple"></i> New
                                                                </a>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>2</td>
                                                        <td>8000.00</td>
                                                        <td class="text-center">
                                                            <div class="action-label">
                                                                <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                                                    <i class="fa fa-dot-circle-o text-success"></i> Approved
                                                                </a>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>2</td>
                                                        <td>8000.00</td>
                                                        <td class="text-center">
                                                            <div class="action-label">
                                                                <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                                                    <i class="fa fa-dot-circle-o text-danger"></i> Declined
                                                                </a>
                                                            </div>
                                                        </td>

                                                    </tr>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section mb-5">
                                    <button class="btn btn-primary submit-btn">Print</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </div>
@endsection
