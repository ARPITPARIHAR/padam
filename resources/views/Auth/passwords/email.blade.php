@extends('layouts.app')
@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<h2 class="fw-bold fs-24">Reset Password</h2>

<p class="text-muted mt-1 mb-4">Enter your email address and we'll send you an email with instructions to reset your
    password.</p>

<div>
    <form method="POST" action="{{ route('password.email') }}" class="authentication-form">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="example-email">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">

            @error('email')
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

<p class="mt-5 text-danger text-center">Back to<a href="{{route('login')}}" class="text-dark fw-bold ms-1">Sign In</a>
</p>
@endsection