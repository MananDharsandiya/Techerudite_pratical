@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Customer Registration</h2>
    <form method="POST" action="{{ route('customer.register') }}">
        @csrf
        <input name="first_name" class="form-control mb-2" placeholder="First Name" required>
        <input name="last_name" class="form-control mb-2" placeholder="Last Name" required>
        <input name="email" type="email" class="form-control mb-2" placeholder="Email" required>
        <input name="password" type="password" class="form-control mb-2" placeholder="Password" required>
        <input name="password_confirmation" type="password" class="form-control mb-2" placeholder="Confirm Password" required>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection
