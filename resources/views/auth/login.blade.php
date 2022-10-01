@extends('layouts.app')

@section('content')
<div class="container">

<div class="account-page">
<div class="header">

        <div class="header-left">
            <a href="admin-dashboard.html" class="logo">
                <img src="{{ asset('images/logo.png') }}" width="40" height="40" alt="">
            </a>
        </div>

        <div class="page-title-box">
            <h3>SLTDA | Sri Lanka Tourism Development Authority</h3>
        </div>

        <!-- <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a> -->

    </div>




    <div class="main-wrapper" style=" position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <div class="account-content">
            <div class="container">

                <div class="account-logo">
                    <a href="admin-dashboard.html"><img src="{{ asset('images/logo2.png') }}" alt="SLTDA | Sri Lanka Tourism Development Authority"></a>
                </div>

                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Login</h3>
                        <p class="account-subtitle">Access to our dashboard</p>

                        <form action="mainmenu.html">
                            <div class="form-group">
                                <label>User Name</label>
                                <input class="form-control" type="text" value="admin@dreamguys.in">
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Password</label>
                                    </div>
                                    <div class="col-auto">
                                        <a class="text-muted" href="forgot-password.html">
                                            Forgot password?
                                        </a>
                                    </div>
                                </div>
                                <div class="position-relative">
                                    <input class="form-control" type="password" value="123456" id="password">
                                    <span class="fa fa-eye-slash" id="toggle-password"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Select Position</label>
                                    <select class="form-control form-select">
                                        <option>Select Position</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" type="submit">Login</button>
                            </div>
                            <div class="account-footer">
                                <p>Don't have an account yet? <a href="register.html">Register</a></p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>







    <!-- <div class="col-lg-6">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="imgcontainer">
                <img src="{{ asset('images/loginavatar2.jpg') }}" style="width:100px;height:100px;" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="email"><b>Email</b></label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="password"><b>Password</b></label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw"><a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a></span>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <span>You Don't Have an Account?</span>
                <a href="{{ route('register') }}"><button type="button" class="signinbtn">Sign In</button></a>
            </div>
        </form>
    </div> -->

</div>
@endsection
