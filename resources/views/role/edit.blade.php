@extends('layouts.master')

@section('title', 'Edit Role')

@section('page-title')
    <i class="bi bi-pencil-square"></i> Edit Role
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/role') }}">Roles</a></li>
                    <li class="breadcrumb-item active">Edit Role</li>
                </ol>
            </nav>

            <!-- Form Card -->
            <div class="card shadow">
                <div class="card-header bg-warning">
                    <h4 class="mb-0"><i class="bi bi-pencil"></i> Edit Role</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/role/'.$role_entry[0]->id.'/update') }}" method="POST">
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
                                   value="{{ $role_entry[0]->role_name }}"
                                   required>
                        </div>

                        <!-- Buttons -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ url('/role') }}" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-warning">
                                <i class="bi bi-save"></i> Update Role
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection