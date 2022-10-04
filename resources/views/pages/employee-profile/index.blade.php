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
                                            <h3 class="user-name m-t-0 mb-0">H.S Saman Kumara</h3>
                                            <h6 class="text-muted">Position</h6>
                                            <div>Search Employee ID : FT-0001</div>
                                            <div>Employee No : 0001</div>
                                            <div>EPF/ETF No : 0001</div>
                                            <div class="small doj text-muted">Date Hired : 1st Jan 2013</div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="personal-info">
                                            <li>
                                                <div class="title">Full Name:</div>
                                                <div class="text">Saman Kumara</div>
                                            </li>
                                            <li>
                                                <div class="title">Date Of Birth:</div>
                                                <div class="text">24th July</div>
                                            </li>
                                            <li>
                                                <div class="title">Contact:</div>
                                                <div class="text">0778562365</div>
                                            </li>
                                            <li>
                                                <div class="title">Email:</div>
                                                <div class="text"><a href="">kjhska@gmail.com</a></div>
                                            </li>
                                            <li>
                                                <div class="title">Address:</div>
                                                <div class="text">1861 Bayonne Ave, Manchester Township, NJ, 08759</div>
                                            </li>
                                            <li>
                                                <div class="title">NIC No:</div>
                                                <div class="text">941578963V</div>
                                            </li>
                                            <li>
                                                <div class="title">Gender:</div>
                                                <div class="text">Male</div>
                                            </li>
                                            <li>
                                                <div class="title">Basic Salary:</div>
                                                <div class="text">Rs. 15000.00</div>
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
                    <form>
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
                                            <input type="text" class="form-control" value="65465">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Employee No</label>
                                            <input type="text" class="form-control" value="45645">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>ETF/EPF No</label>
                                            <input type="text" class="form-control" value="45645">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" value="Saman Kumara">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name with Initials</label>
                                            <input type="text" class="form-control" value="H.S Saman Kumara">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <div class="cal-icon">
                                                <input class="form-control datetimepicker" type="text" value="05/06/1985">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input type="text" class="form-control" value="0778962536">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" value="kshak@gmail.com">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" value="4487 Snowbird Lane">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date Hired</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text" value="05/06/1985">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Basic Salary</label>
                                    <input type="text" class="form-control" value="Rs. 15000.00">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="select form-control">
                                        <option value="male selected">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Designation <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select Position</option>
                                        <option>Web Development</option>
                                        <option>IT Management</option>
                                        <option>Marketing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Grade <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select Grade</option>
                                        <option>Grade 1</option>
                                        <option>Grade 2</option>
                                        <option>Grade 3</option>
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
