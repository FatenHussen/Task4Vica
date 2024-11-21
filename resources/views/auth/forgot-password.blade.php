@extends('layouts.guest')

@section('content')
<div class="container mt-5">
    <h2>Forgot Password</h2>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required autofocus>
        </div>
        <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
    </form>
</div>
@endsection
