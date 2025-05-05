@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Welcome, {{ Auth::user()->first_name }}!</p>
</div>
@endsection
