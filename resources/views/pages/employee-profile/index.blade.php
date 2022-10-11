@extends('layouts.app')

@section('content')

<div class="page-wrapper">

    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Employee Profile</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card mb-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-view">
                            <div class="profile-img-wrap">
                                <div class="profile-img">
                                    <a href="#"><img alt="" src="{{ asset('images/profiles/avatar-02.jpg') }}"></a>
                                </div>
                            </div>
                            <div class="profile-basic">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="profile-info-left">
                                            <h3 class="user-name m-t-0 mb-0">{{ $user->full_name ?? $user->username }}</h3>
                                            <h6 class="text-muted">{{ $user->position }}</h6>
                                            <div>Search Employee ID : {{ $user->search_employee_id }}</div>
                                            <div>Employee No : {{ $user->id }}</div>
                                            <div>EPF/ETF No : {{ $user->etf_epf_number }}</div>
                                            <div class="small doj text-muted">Date Hired : {{ $user->date_hired }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="personal-info">
                                            <li>
                                                <div class="title">Full Name:</div>
                                                <div class="text">{{ $user->full_name ?? "N/A" }}</div>
                                            </li>
                                            <li>
                                                <div class="title">Date Of Birth:</div>
                                                <div class="text">{{ $user->date_of_birth ?? "N/A"}}</div>
                                            </li>
                                            <li>
                                                <div class="title">Contact:</div>
                                                <div class="text">{{ $user->contact ?? "N/A"}}</div>
                                            </li>
                                            <li>
                                                <div class="title">Email:</div>
                                                <div class="text"><a href="">{{ $user->email}}</a></div>
                                            </li>
                                            <li>
                                                <div class="title">Address:</div>
                                                <div class="text">{{ $user->address ?? "N/A"}}</div>
                                            </li>
                                            <li>
                                                <div class="title">NIC No:</div>
                                                <div class="text">{{ $user->nic_number ?? "N/A"}}</div>
                                            </li>
                                            <li>
                                                <div class="title">Gender:</div>
                                                <div class="text">{{ $user->gender ?? "N/A"}}</div>
                                            </li>
                                            <li>
                                                <div class="title">Basic Salary:</div>
                                                <div class="text">{{ $user->basic_salary ?? "N/A"}}</div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-edit"><a data-bs-target="#profile_info" data-bs-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div id="profile_info" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Profile Information</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('employee-profile.update',Auth::user()->id) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap edit-img">
                                    <img class="inline-block" src="{{ asset('images/profiles/avatar-02.jpg') }}" alt="user">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Search Employee ID</label>
                                            <input name="search_employee_id" type="text" class="form-control" value="{{ $user->search_employee_id }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Employee No</label>
                                            <input name="id" type="text" class="form-control" value="{{ $user->id }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>ETF/EPF No</label>
                                            <input name="etf_epf_number" type="text" class="form-control" value="{{ $user->etf_epf_number }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input name="full_name" type="text" class="form-control" value="{{ $user->full_name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name with Initials</label>
                                            <input name="name_with_initials" type="text" class="form-control" value="{{ $user->name_with_initials }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <div class="cal-icon">
                                                <input name="date_of_birth" class="form-control datetimepicker" type="date" value="{{ $user->date_of_birth }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input name="contact" type="number" class="form-control" value="{{ $user->contact }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" value="{{ $user->email }}">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input name="address" type="text" class="form-control" value="{{ $user->address }}">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date Hired</label>
                                    <div class="cal-icon">
                                        <input name="date_hired" class="form-control datetimepicker" type="date" value="{{ $user->date_hired }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Basic Salary</label>
                                    <input name="basic_salary" type="number" class="form-control" value="{{ $user->basic_salary }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name="gender"  class="select form-control" required>
                                        <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Designation <span class="text-danger">*</span></label>
                                    <select name="position" class="select form-select" required>
                                        <option value="Web Developer" {{ $user->position == 'Web Developer' ? 'selected' : '' }}>Web Developer</option>
                                        <option value="IT Manager" {{ $user->position == 'IT Manager' ? 'selected' : '' }}>IT Manager</option>
                                        <option value="Marketing Manager" {{ $user->position == 'Marketing Manager' ? 'selected' : '' }}>Marketing Manager</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Grade <span class="text-danger">*</span></label>
                                    <select name="grade" class="select form-select" required>
                                        @foreach($grades as $grade)
                                            <option value="{{ $grade->id }}" {{  !empty($user->grade) ?? ($user->grade->id == $grade->id ? 'selected' : '') }}>{{ $grade->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="submit-section">
                                <button class="btn btn-info">Add Record</button>
                                <button class="btn btn-primary">Clear Record</button>
                                <button class="btn btn-success mt-lg-0 mt-2">Update</button>
                            </div>
                            <div class="submit-section  mt-3">
                                <button class="btn btn-danger submit-btn">Delete</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



</div>
@endsection
