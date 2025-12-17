@extends('layouts.master')

@section('title', 'Add User')

@section('page-title')
    <i class="bi bi-person-plus"></i> Add New User
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/user') }}">Users</a></li>
                    <li class="breadcrumb-item active">Add New User</li>
                </ol>
            </nav>

            <!-- Form Card -->
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0"><i class="bi bi-plus-circle"></i> Add New User</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/user/create') }}" method="POST">
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
                                   placeholder="Enter username" 
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
                                   placeholder="Enter password" 
                                   required>
                            <small class="text-muted">Password should be at least 8 characters</small>
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
                                   placeholder="user@example.com" 
                                   required>
                        </div>

                        <!-- Role ID -->
                        <div class="mb-3">
                            <label for="role_id" class="form-label">
                                Role <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" id="role_id" name="role_id" required>
                                <option value="">Choose role...</option>
                                <option value="1">Admin</option>
                                <option value="2">Manager</option>
                                <option value="3">User</option>
                            </select>
                        </div>

                        <!-- Buttons -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ url('/user') }}" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-save"></i> Save User
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection