@extends('layouts.app')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible " id="successMessage" role="alert">
    <div class="alert-message">
        <strong>Success! </strong>{{session('success')}}
    </div>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible " id="errorMessage" role="alert">
    <div class="alert-message">
        <strong>Error! </strong>{{session('error')}}
    </div>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<h2 class="fw-bold fs-24">Sign In</h2>

<p class="text-muted mt-1 mb-4">Enter your email address and password to access admin panel.</p>

<div class="mb-5">
    <form method="POST" action="{{ route('login') }}" class="authentication-form">
        @csrf
        <form action="https://techzaa.in/larkon/admin/index.html" class="authentication-form">
            <div class="mb-3">
                <label class="form-label" for="example-email">Email</label>
                <input id="email" type="email" name="email"
                    class="form-control bg- @error('email') is-invalid @enderror" placeholder="Enter your email"
                    alue="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                @if (Route::has('password.request'))
                <a class="float-end text-muted text-unline-dashed ms-1" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
                <!-- <a href="auth-password.html" class="float-end text-muted text-unline-dashed ms-1">Reset password</a> -->
                <label class="form-label" for="example-password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Enter your password" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                </div>
            </div>

            <div class="mb-1 text-center d-grid">
                <button class="btn btn-soft-primary" type="submit">Sign In</button>
            </div>
        </form>

</div>

<!-- <p class="text-danger text-center">Don't have an account? <a href="auth-signup.html" class="text-dark fw-bold ms-1">Sign
        Up</a></p> -->
@endsection