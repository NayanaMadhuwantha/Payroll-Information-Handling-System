@extends('layouts.app')

@section('content')

    <div class="page-wrapper">

        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Monthly Leave Report</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('reports') }}">Report</a></li>
                            <li class="breadcrumb-item active">Leave Report</li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>


            <div class="row">
                <div class="col-md-12 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">

                            <form action="{{ route('leaveReport.get') }}" method="post">
                                @csrf
                                <div class="form-group row offset-md-1">
                                    <label class="col-form-label col-md-1">Month :- </label>
                                    <div class="col-md-2">
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
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>

                            <h3 class="page-title text-center mb-4 text-decoration-underline">Monthly Leave Report
                                @isset($month_name)
                                    - {{ $month_name }}
                                @endisset
                            </h3>

                            <div class="form-group row">
                                <div class="table-responsive table-striped table-bordered">
                                    <table class="table">
                                        <!-- <thead>
                                            <tr>
                                                <th scope="col" rowspan="2">Employee No</th>
                                                <th scope="col">Deduction I</th>
                                                <th scope="col">Deduction II</th>
                                                <th scope="col">Nopay</th>
                                                <th scope="col">Lunch</th>
                                                <th scope="col">Welfare</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead> -->
                                        <tbody>
                                        <tr>
                                            <th scope="col" rowspan="2" style="text-align: center;">Employee No</th>

                                            <th scope="col" colspan="6" class="text-center">Leave Type</th>

                                            <th scope="col" rowspan="2" class="text-center">Total</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Annual</th>
                                            <th scope="col">Casual</th>
                                            <th scope="col">Maternity</th>
                                            <th scope="col">Sick</th>
                                            <th scope="col">Half-Day</th>
                                            <th scope="col">Full-Day</th>
                                        </tr>
                                        @isset($users)
                                            @foreach($users as $user)
                                                <tr>
                                                    <th style="padding-top: 25px;">{{ $user->id }}</th>
                                                    <td>{{ $user->annual_leaves }}</td>
                                                    <td>{{ $user->casual_leaves }}</td>
                                                    <td>{{ $user->maternity_leaves }}</td>
                                                    <td>{{ $user->sick_leaves }}</td>
                                                    <td>{{ $user->half_day_leaves }}</td>
                                                    <td>{{ $user->full_day_leaves }}</td>
                                                    <td>{{ $user->total_leaves }}</td>
                                                </tr>
                                            @endforeach
                                        @endisset
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <div class="form-group row offset-md-1">
                                <label class="col-form-label col-md-1">Prepared By</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control border-0 border-bottom">
                                </div>
                                <label class="col-form-label col-md-1">Checked by</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control border-0 border-bottom">
                                </div>
                                <label class="col-form-label col-md-1">Approved by</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control border-0 border-bottom">
                                </div>
                            </div>
                            <div class="form-group row  offset-md-1">
                                <label class="col-form-label col-md-1">Date</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control border-0 border-bottom">
                                </div>
                                <label class="col-form-label col-md-1">Date</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control border-0 border-bottom">
                                </div>
                                <label class="col-form-label col-md-1">Date</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control border-0 border-bottom">
                                </div>
                            </div>

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
