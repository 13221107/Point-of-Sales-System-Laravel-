@extends('layouts.master')

@section('title', 'Roles Management')

@section('page-title')
    <i class="bi bi-shield-check"></i> Roles Management
@endsection

@section('content')
    <!-- Add Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-0">Manage user roles and permissions</p>
        </div>
        <a href="{{ url('/role/add') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Add New Role
        </a>
    </div>

    <!-- Roles Table Card -->
    <div class="card shadow">
        <div class="card-header bg-white">
            <h5 class="mb-0"><i class="bi bi-table"></i> Roles List</h5>
        </div>
        <div class="card-body">
            @if (empty($role_list) || count($role_list) == 0)
                <div class="alert alert-info text-center" role="alert">
                    <i class="bi bi-info-circle"></i> There are no roles in the database yet.
                    <br>
                    <a href="{{ url('/role/add') }}" class="btn btn-primary mt-2">
                        Add Your First Role
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Role Name</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($role_list as $roles)
                                <tr>
                                    <td>{{ $roles->id }}</td>
                                    <td>
                                        <strong><i class="bi bi-shield-fill"></i> {{ $roles->role_name }}</strong>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ url('/role/'.$roles->id.'/edit') }}" 
                                               class="btn btn-sm btn-warning" 
                                               title="Edit">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                            <a href="{{ url('/role/'.$roles->id.'/delete') }}" 
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