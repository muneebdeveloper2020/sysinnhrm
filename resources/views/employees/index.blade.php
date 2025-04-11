@extends('layouts.app')

@section('content')
<h1>Employees</h1>
<a href="{{ route('employees.create') }}">Add Employee</a>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    @foreach($employees as $employee)
    <tr>
        <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
        <td>{{ $employee->email }}</td>
        <td>
            <a href="{{ route('employees.show', $employee) }}">View</a>
            <a href="{{ route('employees.edit', $employee) }}">Edit</a>
            <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
