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