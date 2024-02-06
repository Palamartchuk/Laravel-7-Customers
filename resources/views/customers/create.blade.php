@extends('layouts.app')

@section('content')
<div class="container">
    <x-return-button>Go Back</x-return-button>
    <h1>{{ isset($customer) ? 'Edit Customer' : 'Create Customer' }}</h1>
    <form action="{{ isset($customer) ? route('customers.update', $customer->id) : route('customers.store') }}" method="POST">
        @csrf
        @if(isset($customer))
            @method('PATCH')
        @endif

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $customer->name ?? '' }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $customer->email ?? '' }}" required>
        </div>

        <button type="submit" class="btn primary">{{ isset($customer) ? 'Update' : 'Create' }}</button>
    </form>
</div>
@endsection
