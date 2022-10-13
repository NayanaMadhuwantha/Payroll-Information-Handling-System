@extends('layouts.app')

@section('content')

<div class="page-wrapper">

            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Employee</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Employee List</li>
                            </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <!-- <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_employee"><i class="fa fa-plus"></i> Add Employee</a> -->
                            <!-- <div class="view-icons">
                                <a href="employees.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                                <a href="employees-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>




                <div class="row staff-grid-row">
                    @foreach($users as $user)
                        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                            <div class="profile-widget">
                                <div class="profile-img">
                                    <a href="{{ route('employee-profile.index') }}?user_id={{$user->id}}" class="avatar"><img src="{{ asset('images/profiles/avatar-02.jpg') }}" alt=""></a>
                                </div>
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                                <h4 class="user-name m-t-10 mb-0 text-ellipsis" onclick="redirectToUserProfile()"><a href="{{ route('employee-profile.index') }}?user_id={{$user->id}}">{{ $user->full_name }}</a></h4>
                                <div class="small text-muted">{{ $user->position }}</div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


            <div class="modal custom-modal fade" id="delete_employee" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Employee</h3>
                                <p>Are you sure want to delete?</p>
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

<script type="application/javascript">
    /*function redirectToUserProfile(user_id){
        alert(user_id)
    }*/
</script>
@endsection
