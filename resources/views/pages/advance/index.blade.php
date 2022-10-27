@extends('layouts.app')

@section('content')


<div class="page-wrapper">

    <div class=" container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Advance</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Advance</li>
                    </ul>
                </div>
            </div>
        </div>


        <ul class="nav nav-tabs nav-tabs-bottom align-center" id="myTab" role="tablist">
            @if(auth()->user()->position == 'admin')
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#aproveadvance" role="tab" aria-controls="home" aria-selected="true">Aprove Advance</a>
            </li>
            @endif
            <li class="nav-item" role="presentation">
                @if(auth()->user()->position == 'admin')
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#advancereport" role="tab" aria-controls="profile" aria-selected="false">Report</a>
@else
                <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#advancereport" role="tab" aria-controls="profile" aria-selected="false">Report</a>
                @endif
            </li>
        </ul>

        <div class="tab-content">

@if(auth()->user()->position == 'admin')
            <div class="tab-pane active" id="aproveadvance" role="tabpanel" aria-labelledby="aproveadvance-tab">
                <!-- <h4>Expense Approval Settings</h4> -->

                <div class="col-md-8 offset-md-2 mt-lg-3">

                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Advance Aprove Form</h3>
                            </div>
                        </div>
                    </div>



                    <form action="{{ route('advance.store') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Employee</label>
                            <div class="col-md-4">
                                <select name="user" id="user" class="select form-select" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" data-grade="{{ $user->grade->name }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="col-form-label col-md-2">Grade</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Maximum Amount</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control">
                            </div>
                            <label class="col-form-label col-md-2">Month</label>
                            <div class="col-md-4">
                                <select name="month" class="select form-select" required>
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
                            <label class="col-form-label col-md-2">Required Amount (Rs.)</label>
                            <div class="col-md-10 mb-3">
                                <input type="number" class="form-control" name="amount" required>
                            </div>

                            <label class="col-form-label col-md-2">Date</label>
                            <div class="col-md-4">
                                <input type="date" class="form-control" name="date" required>
                            </div>
                        </div>


                        <div class="submit-section mt-2 mb-4">
                            <button class="btn btn-success submit-btn">Apply</button>
                            <button class="btn btn-danger submit-btn">Cancel</button>
                        </div>

                    </form>

                </div>

            </div>
@endif




@if(auth()->user()->position == 'admin')
<div class="tab-pane" id="advancereport" role="tabpanel" aria-labelledby="advancereport-tab">
@else
            <div class="tab-pane active" id="advancereport" role="tabpanel" aria-labelledby="advancereport-tab">
@endif
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
                                                <th>Date</th>
                                                <th>Advance Amount (Rs.)</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($advance as $item)
                                            <tr>
                                                <td>{{ $item->user_id }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td>{{ $item->amount }}</td>
                                                <td class="text-center">
                                                    <div class="action-label">
                                                        <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                                            <i class="fa fa-dot-circle-o
                                                            @if($item->status == 'Pending')
                                                                text-purple
                                                            @elseif($item->status == 'Approved')
                                                                text-success
                                                            @elseif($item->status == 'Rejected')
                                                                text-danger
                                                            @endif
                                                                "></i> {{ $item->status }}
                                                        </a>
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach

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
