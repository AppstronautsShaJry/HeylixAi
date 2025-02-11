@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Manage Users</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->roles->pluck('name')->first() }}</td>
                    <td>
                        <form action="{{ route('users.assignRole', $user) }}" method="POST">
                            @csrf
                            <select name="role" onchange="this.form.submit()">
                                <option value="admin" {{ $user->hasRole('admin') ? 'selected' : '' }}>Admin</option>
                                <option value="staff" {{ $user->hasRole('staff') ? 'selected' : '' }}>Staff</option>
                            </select>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
