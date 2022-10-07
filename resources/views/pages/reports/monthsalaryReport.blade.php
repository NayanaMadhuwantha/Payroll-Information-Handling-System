@extends('layouts.app')

@section('content')

<div class="page-wrapper">

            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Month Salary Sheet</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('reports') }}">Report</a></li>
                                <li class="breadcrumb-item active">salary sheet</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>




                <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">

                                <form>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-1">Month</label>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="table-responsive table-striped table-bordered">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Employee No</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Basic Salary</th>
                                                        <th scope="col">Allowance</th>
                                                        <th scope="col">Deduction</th>
                                                        <th scope="col">Total Salary</th>
                                                        <th scope="col">ETF</th>
                                                        <th scope="col">EPF</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th style="padding-top: 25px;"></th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="padding-top: 25px;"></th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="padding-top: 25px;"></th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="padding-top: 25px;"></th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">Total</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                    <div class="form-group row offset-md-2">
                                        <label class="col-form-label col-md-1">Prepared By</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control border-0 border-bottom">
                                        </div>
                                        <label class="col-form-label col-md-1">Approved by</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control border-0 border-bottom">
                                        </div>
                                    </div>
                                    <div class="form-group row  offset-md-2">
                                        <label class="col-form-label col-md-1">Date</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control border-0 border-bottom">
                                        </div>
                                        <label class="col-form-label col-md-1">Date</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control border-0 border-bottom">
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-12  mt-lg-2">
                    <p>Logged As: Account analyst</p>
                </div>

            </div>

        </div>
@endsection
