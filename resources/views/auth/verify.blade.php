@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Email Verification</h2>
    <form method="POST" action="{{ route('verify.form') }}">
        @csrf
        <input name="email" class="form-control mb-2" placeholder="Email" value="{{ session('email') }}" required>
        <input name="code" class="form-control mb-2" placeholder="Verification Code" required>
        <button type="submit" class="btn btn-success">Verify</button>
    </form>
</div>
@endsection
