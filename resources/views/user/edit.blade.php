{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Users</title>
</head>
<body>
    <h3>Edit user</h3>
    <form action="{{ url('/user/'.$user_entry[0]->id.'/update') }}" method="post">
        @csrf
        Username
        <input type="text" name="username" id="" value="{{ $user_entry[0]->username }}">
        <br>
        Password
        <input type="password" name="password" id="" value="{{ $user_entry[0]->password }}">
        <br>
        Email
        <input type="email" name="email" id="" value="{{ $user_entry[0]->email }}">
        <br>
        Role ID 
        <input type="text" name="role_id" id="" value="{{ $user_entry[0]->role_id }}">
        <br>
        <button type="submit">Update User</button>
    </form>
    <a href="{{ url('/user') }}">Go Back</a>
</body>
</html> --}}

@extends('layouts.master')

@section('title', 'Edit User')

@section('page-title')
    <i class="bi bi-pencil-square"></i> Edit User
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/user') }}">Users</a></li>
                    <li class="breadcrumb-item active">Edit User</li>
                </ol>
            </nav>

            <!-- Form Card -->
            <div class="card shadow">
                <div class="card-header bg-warning">
                    <h4 class="mb-0"><i class="bi bi-pencil"></i> Edit User</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/user/'.$user_entry[0]->id.'/update') }}" method="POST">
                        @csrf
                        
                        <!-- Username -->
                        <div class="mb-3">
                            <label for="username" class="form-label">
                                Username <span class="text-danger">*</span>
                            </label>
                            <input type="text" 
                                   class="form-control" 
                                   id="username" 
                                   name="username" 
                                   value="{{ $user_entry[0]->username }}"
                                   required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">
                                Password <span class="text-danger">*</span>
                            </label>
                            <input type="password" 
                                   class="form-control" 
                                   id="password" 
                                   name="password" 
                                   value="{{ $user_entry[0]->password }}"
                                   required>
                            <small class="text-muted">Leave blank to keep current password</small>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Email <span class="text-danger">*</span>
                            </label>
                            <input type="email" 
                                   class="form-control" 
                                   id="email" 
                                   name="email" 
                                   value="{{ $user_entry[0]->email }}"
                                   required>
                        </div>

                        <!-- Role ID -->
                        <div class="mb-3">
                            <label for="role_id" class="form-label">
                                Role <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" id="role_id" name="role_id" required>
                                <option value="1" {{ $user_entry[0]->role_id == 1 ? 'selected' : '' }}>Admin</option>
                                <option value="2" {{ $user_entry[0]->role_id == 2 ? 'selected' : '' }}>Manager</option>
                                <option value="3" {{ $user_entry[0]->role_id == 3 ? 'selected' : '' }}>User</option>
                            </select>
                        </div>

                        <!-- Buttons -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ url('/user') }}" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-warning">
                                <i class="bi bi-save"></i> Update User
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection