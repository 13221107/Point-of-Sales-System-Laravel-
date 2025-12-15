{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Roles</title>
</head>
<body>
    <h3>Add New Role</h3>
    <form action="{{ url('/role/create') }}" method="post">
        @csrf
        Role Name
        <input type="text" name="role_name" id="">
        <br>
        <button type="submit">Add New Role</button>
        <br>
    </form>
    <a href="{{ url('/role') }}">Go Back</a>
</body>
</html> --}}
@extends('layouts.master')

@section('title', 'Add Role')

@section('page-title')
    <i class="bi bi-shield-plus"></i> Add New Role
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/role') }}">Roles</a></li>
                    <li class="breadcrumb-item active">Add New Role</li>
                </ol>
            </nav>

            <!-- Form Card -->
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0"><i class="bi bi-plus-circle"></i> Add New Role</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/role/create') }}" method="POST">
                        @csrf
                        
                        <!-- Role Name -->
                        <div class="mb-3">
                            <label for="role_name" class="form-label">
                                Role Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" 
                                   class="form-control" 
                                   id="role_name" 
                                   name="role_name" 
                                   placeholder="e.g., Admin, Manager, User" 
                                   required>
                            <small class="text-muted">Enter a descriptive name for this role</small>
                        </div>

                        <!-- Buttons -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ url('/role') }}" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-save"></i> Save Role
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection