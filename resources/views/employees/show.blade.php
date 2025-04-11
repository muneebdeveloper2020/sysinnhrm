@extends('layouts.app')

@section('content')
    <h2>Employee Details</h2>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $employee->first_name }} {{ $employee->last_name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $employee->email }}</p>
            <p class="card-text"><strong>Phone:</strong> {{ $employee->phone ?? 'N/A' }}</p>
            <p class="card-text"><strong>Position:</strong> {{ $employee->position ?? 'N/A' }}</p>
            <p class="card-text"><strong>Salary:</strong> {{ $employee->salary ? '₹ ' . number_format($employee->salary, 2) : 'N/A' }}</p>
            <p class="card-text"><strong>Hire Date:</strong> {{ $employee->hired_at ? $employee->hired_at->format('d M Y') : 'N/A' }}</p>
            <p class="card-text"><strong>Department:</strong> {{ $employee->department->name ?? 'N/A' }}</p>
        </div>
    </div>

    <a href="{{ route('employees.edit', $employee) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
