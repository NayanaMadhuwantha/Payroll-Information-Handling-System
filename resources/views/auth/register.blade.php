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

    </div>

    <div class="main-wrapper" style=" position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <div class="account-content">
            <div class="container">
                {{-- <div class="card-header">{{ __('Register') }}</div> --}}

                <div class="account-logo">
                    <a href="#"><img src="{{ asset('images/logo2.png') }}" alt="SLTDA | Sri Lanka Tourism Development Authority"></a>
                </div>

                <div class="account-box">
                    <div class="account-wrapper">
                    <h3 class="account-title">Register</h3>
                    {{-- <p class="account-subtitle">Access to our dashboard</p> --}}


                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group mb-2">
                            <label for="name">{{ __('Name') }}</label>

                            {{-- <div class="col-md-6"> --}}
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        </div>

                        <div class="form-group mb-2">
                            <label for="email">{{ __('Email Address') }}</label>

                            {{-- <div class="col-md-6"> --}}
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-2">
                                    <label for="gender">{{ __('Gender') }}</label>
        
                                        <select name="gender" class="form-select">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-2">
                                    <label for="grade_id">{{ __('Grade') }}</label>
        
                                        <select name="grade_id" class="form-select">
                                            @foreach($grades as $grade)
                                                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                        </div>

                        <div class="form-group mb-2">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary account-btn">
                                    {{ __('Register') }}
                                </button>
                        </div>
                        <div class="account-footer">
                            <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
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
