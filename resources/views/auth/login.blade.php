@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-6">
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
    </div>
</div>
@endsection
