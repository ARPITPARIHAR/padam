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

<h2 class="fw-bold fs-24">Reset Password</h2>

<p class="text-muted mt-1 mb-4">Enter your email address and we'll send you an email with instructions to reset your
    password.</p>

<div>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="mb-3">
            <label class="form-label" for="example-email">Email Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
                placeholder="Enter your email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="example-email">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="example-email">Confirm Password</label>
            <input input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-1 text-center d-grid">
            <button class="btn btn-primary" type="submit">Reset Password</button>
        </div>
    </form>
</div>

<!-- <p class="mt-5 text-danger text-center">Back to<a href="{{route('login')}}" class="text-dark fw-bold ms-1">Sign In</a>
</p> -->
@endsection