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

@section('title', 'Delete User')

@section('page-title')
    <i class="bi bi-trash"></i> Delete User
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/user') }}">Users</a></li>
                    <li class="breadcrumb-item active">Delete User</li>
                </ol>
            </nav>

            <!-- Delete Confirmation Card -->
            <div class="card shadow border-danger">
                <div class="card-header bg-danger text-white">
                    <h4 class="mb-0"><i class="bi bi-exclamation-triangle"></i> Confirm Deletion</h4>
                </div>
                <div class="card-body text-center">
                    <i class="bi bi-person-x text-danger" style="font-size: 4rem;"></i>
                    <h5 class="mt-3">Are you sure you want to delete this user?</h5>
                    
                    <!-- User Details -->
                    <div class="alert alert-light mt-4 text-start">
                        <table class="table table-borderless mb-0">
                            <tr>
                                <th width="35%">Username:</th>
                                <td><strong>{{ $user_entry[0]->username }}</strong></td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>{{ $user_entry[0]->email }}</td>
                            </tr>
                            <tr>
                                <th>Role:</th>
                                <td>
                                    @if($user_entry[0]->role_id == 1)
                                        <span class="badge bg-danger">Admin</span>
                                    @elseif($user_entry[0]->role_id == 2)
                                        <span class="badge bg-primary">Manager</span>
                                    @else
                                        <span class="badge bg-secondary">User</span>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="alert alert-warning" role="alert">
                        <i class="bi bi-exclamation-circle"></i> 
                        <strong>Warning:</strong> This action cannot be undone!
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                        <a href="{{ url('/user') }}" class="btn btn-secondary btn-lg">
                            <i class="bi bi-x-circle"></i> No, Go Back
                        </a>
                        <a href="{{ url('/user/'.$user_entry[0]->id.'/destroy') }}" class="btn btn-danger btn-lg">
                            <i class="bi bi-trash"></i> Yes, Delete User
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection