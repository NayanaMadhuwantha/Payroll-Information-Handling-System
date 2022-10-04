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
                    <a href="#"><img src="{{ asset('images/logo2.png') }}" alt="SLTDA | Sri Lanka Tourism Development Authority"></a>
                </div>

                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Login</h3>
                        <p class="account-subtitle">Access to our dashboard</p>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
<!--                                    <span class="fa fa-eye-slash" id="toggle-password"></span>-->
                                </div>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
                                <p>Don't have an account yet? <a href="{{ route('register') }}">Register</a></p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>

</div>
@endsection
