@extends('layouts.app')

@section('content')

<div class="page-wrapper">

    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Leaves</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Employee Leaves</li>
                    </ul>
                </div>
                <!-- <div class="col-auto float-end ms-auto">
                    <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_leave"><i class="fa fa-plus"></i> Add Leave</a>
                </div> -->
            </div>
        </div>


        <ul class="nav nav-tabs nav-tabs-bottom align-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#markattendance" role="tab" aria-controls="home" aria-selected="true">Aprove Leave</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#attendancehanding" role="tab" aria-controls="profile" aria-selected="false">Handle Leave</a>
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


                    <div class="row">
                        @foreach($available_leaves as $available_leave)
                            <div class="col-md-3">
                                <div class="stats-info">
                                    <h6>{{ $available_leave->type->name }}</h6>
                                    <h4>{{ $available_leave->no_of_leaves }}</h4>
                                </div>
                            </div>
                        @endforeach
                    </div>


                    <form action="{{ route('leave.store') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Employee</label>
                            <div class="col-md-4">
                                <select class="select" name="user">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="col-form-label col-md-2">Leave Type</label>
                            <div class="col-md-4">
                                <select class="select" name="leave_type">
                                    @foreach($remaining_leaves as $remaining_leave)
                                        <option value="{{ $remaining_leave->leave_type_id }}">{{ $remaining_leave->type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Start Date</label>
                            <div class="col-md-4">

                                <div class="cal-icon">
                                    <input name="start_date" class="form-control datetimepicker" type="date" required>
                                </div>
                            </div>
                            <label class="col-form-label col-md-2">End Date</label>
                            <div class="col-md-4">
                                <div class="cal-icon">
                                    <input name="end_date" class="form-control datetimepicker" type="date">
                                </div>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Reason</label>
                            <div class="col-md-10">
                                <div class="cal-icon">
                                    <textarea  name="reason" class="form-control" ></textarea>
                                </div>
                            </div>
                        </div>
                        @isset($message)
                        <div style="text-align: center">
                            {{$message}}
                        </div>
                        @endisset
                        <div class="submit-section mt-2 mb-4">
                            <button class="btn btn-success submit-btn">Apply</button>
                            <button class="btn btn-danger submit-btn">Cancel</button>
                        </div>
                        <hr>

                        <div class="row my-4">
                            <div class="col-lg-12">

                                <p>Aprove Leave Hisytory</p>
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Leave Type </th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>Days</th>
                                                <th>Reason</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($approved_leaves as $approved_leave)
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $approved_leave->type->name }}</td>
                                                <td>{{ $approved_leave->start_date }}</td>
                                                <td>{{ $approved_leave->end_date }}</td>
                                                <td>{{ $approved_leave->no_of_days }} days</td>
                                                <td>{{ $approved_leave->reason }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                    </form>

                </div>

            </div>







            <div class="tab-pane" id="attendancehanding" role="tabpanel" aria-labelledby="attendancehanding-tab">

                <div class="col-md-10 offset-md-1 mt-lg-3">

                    <form>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3"> Employee ID</label>
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
                                                <th>Leave Type</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>No of Days</th>
                                                <th>Reason</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($all_leaves as $leave)
                                            <tr>
                                                <td>{{ $leave->type->name }}</td>
                                                <td>{{ $leave->start_date }}</td>
                                                <td>{{ $leave->end_date }}</td>
                                                <td>{{ $leave->no_of_days }} days</td>
                                                <td>{{ $leave->reason }}</td>
                                                <td class="text-center">
                                                    <div class="action-label">
                                                        <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                                            <i class="fa fa-dot-circle-o
                                                            @if($leave->status == 'Pending')
                                                                text-purple
                                                            @elseif($leave->status == 'Approved')
                                                                text-success
                                                            @elseif($leave->status == 'Rejected')
                                                                text-danger
                                                            @endif
                                                            "></i> {{ $leave->status }}
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="submit-section mb-5">
                            <button class="btn btn-success submit-btn">Update</button>
                            <button class="btn btn-primary submit-btn">Print</button>
                        </div>
                    </form>

                </div>

            </div>



        </div>

    </div>





    <div id="edit_leave" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Leave</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Leave Type <span class="text-danger">*</span></label>
                            <select class="select">
<option>Select Leave Type</option>
<option>Casual Leave 12 Days</option>
</select>
                        </div>
                        <div class="form-group">
                            <label>From <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" value="01-01-2019" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>To <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" value="01-01-2019" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Number of days <span class="text-danger">*</span></label>
                            <input class="form-control" readonly type="text" value="2">
                        </div>
                        <div class="form-group">
                            <label>Remaining Leaves <span class="text-danger">*</span></label>
                            <input class="form-control" readonly value="12" type="text">
                        </div>
                        <div class="form-group">
                            <label>Leave Reason <span class="text-danger">*</span></label>
                            <textarea rows="4" class="form-control">Going to hospital</textarea>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal custom-modal fade" id="delete_approve" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Leave</h3>
                        <p>Are you sure want to Cancel this leave?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
