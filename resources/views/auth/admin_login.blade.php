@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Admin Login</h2>
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <input name="email" class="form-control mb-2" placeholder="Email" required>
        <input name="password" type="password" class="form-control mb-2" placeholder="Password" required>
        <button type="submit" class="btn btn-dark">Login</button>
    </form>
</div>
@endsection
