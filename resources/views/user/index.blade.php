{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    @if (empty($user_list))
        There are no data in user table
    @else
        <table>
            <thead>
                <th>Username</th>
                <th>Email</th>             
                <th>Role ID</th>
                <th>Action</th>           
            </thead>
            <tbody>
                @foreach ($user_list as $users)
                    <tr>
                        <td>{{ $users->username }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->role_id }}</td>
                        <td>
                             <a href="{{ url('/user/'.$users->id.'/edit') }}">Edit</a>
                            <a href="{{ url('/user/'.$users->id.'/delete') }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <a href="{{ url('/user/add') }}">Add New User</a>
</body>
</html> --}}
@extends('layouts.master')

@section('title', 'Users Management')

@section('page-title')
    <i class="bi bi-people"></i> Users Management
@endsection

@section('content')
    <!-- Add Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-0">Manage system users and access</p>
        </div>
        <a href="{{ url('/user/add') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Add New User
        </a>
    </div>

    <!-- Users Table Card -->
    <div class="card shadow">
        <div class="card-header bg-white">
            <h5 class="mb-0"><i class="bi bi-table"></i> Users List</h5>
        </div>
        <div class="card-body">
            @if (empty($user_list) || count($user_list) == 0)
                <div class="alert alert-info text-center" role="alert">
                    <i class="bi bi-info-circle"></i> There are no users in the database yet.
                    <br>
                    <a href="{{ url('/user/add') }}" class="btn btn-primary mt-2">
                        Add Your First User
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Last Login</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user_list as $users)
                                <tr>
                                    <td>{{ $users->id }}</td>
                                    <td>
                                        <strong><i class="bi bi-person-circle"></i> {{ $users->username }}</strong>
                                    </td>
                                    <td>{{ $users->email }}</td>
                                    <td>
                                        @if($users->role_id == 1)
                                            <span class="badge bg-danger">Admin</span>
                                        @elseif($users->role_id == 2)
                                            <span class="badge bg-primary">Manager</span>
                                        @else
                                            <span class="badge bg-secondary">Cashier</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($users->last_login)
                                            {{ date('M d, Y h:i A', strtotime($users->last_login)) }}
                                        @else
                                            <span class="text-muted">Never</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ url('/user/'.$users->id.'/edit') }}" 
                                               class="btn btn-sm btn-warning" 
                                               title="Edit">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                            <a href="{{ url('/user/'.$users->id.'/delete') }}" 
                                               class="btn btn-sm btn-danger" 
                                               title="Delete">
                                                <i class="bi bi-trash"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection