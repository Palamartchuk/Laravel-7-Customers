
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Welcome to Customer Management</h1>
    <ul class="link-list">
        <li><a href="{{ url('/customers') }}">View Customers</a></li>
        <li><a href="{{ url('/customers/create') }}">Create Customer</a></li>
    </ul>
</div>
@endsection
