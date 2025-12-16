@extends('layouts.master')

@section('title', 'Users Management')

@section('page-title')
    <i class="bi bi-people"></i> Users Management
@endsection

@section('content')
    <!-- Role Badge Display -->
    <div class="alert alert-info mb-3">
        <strong>Your Access Level:</strong>
        @if(session('role_id') == 4)
            <span class="badge bg-danger">👑 Admin - Full Access</span>
        @elseif(session('role_id') == 3)
            <span class="badge bg-primary">💼 Manager - View Only</span>
        @else
            <span class="badge bg-secondary">No Access</span>
        @endif
    </div>

    <!-- Add Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-0">Manage system users and access</p>
        </div>
        @if(session('role_id') == 4)
            <a href="{{ url('/user/add') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Add New User
            </a>
        @else
            <span class="badge bg-warning text-dark fs-6">
                <i class="bi bi-info-circle"></i> View Only Mode (Manager)
            </span>
        @endif
    </div>

    <!-- Users Table Card -->
    <div class="card shadow">
        <div class="card-header bg-white">
            <h5 class="mb-0"><i class="bi bi-table"></i> Users List</h5>
        </div>
        <div class="card-body">
            @if (empty($user_list) || count($user_list) == 0)
                <div class="alert alert-info text-center" role="alert">
                    <i class="bi bi-inbox" style="font-size: 3rem;"></i>
                    <p class="mt-2 mb-3">There are no users in the database yet.</p>
                    @if(session('role_id') == 4)
                        <a href="{{ url('/user/add') }}" class="btn btn-primary">
                            <i class="bi bi-plus-circle"></i> Add Your First User
                        </a>
                    @endif
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">#</th>
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
                                    <td class="text-center">{{ $users->id }}</td>
                                    <td>
                                        <strong><i class="bi bi-person-circle"></i> {{ $users->username }}</strong>
                                    </td>
                                    <td>
                                        <i class="bi bi-envelope"></i> {{ $users->email }}
                                    </td>
                                    <td>
                                        @if($users->role_id == 4)
                                            <span class="badge bg-danger">👑 Admin</span>
                                        @elseif($users->role_id == 3)
                                            <span class="badge bg-primary">💼 Manager</span>
                                        @elseif($users->role_id == 2)
                                            <span class="badge bg-success">📦 Inventory Staff</span>
                                        @else
                                            <span class="badge bg-warning text-dark">💰 Cashier</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($users->last_login)
                                            <i class="bi bi-clock-history"></i> 
                                            {{ date('M d, Y h:i A', strtotime($users->last_login)) }}
                                        @else
                                            <span class="text-muted">
                                                <i class="bi bi-x-circle"></i> Never logged in
                                            </span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            @if(session('role_id') == 4)
                                                <!-- Admin can edit/delete -->
                                                <a href="{{ url('/user/'.$users->id.'/edit') }}" 
                                                   class="btn btn-sm btn-warning" 
                                                   title="Edit User">
                                                    <i class="bi bi-pencil"></i> Edit
                                                </a>
                                                <a href="{{ url('/user/'.$users->id.'/delete') }}" 
                                                   class="btn btn-sm btn-danger" 
                                                   title="Delete User"
                                                   onclick="return confirm('Are you sure you want to delete {{ $users->username }}?')">
                                                    <i class="bi bi-trash"></i> Delete
                                                </a>
                                            @else
                                                <!-- Manager can only view -->
                                                <button class="btn btn-sm btn-info" disabled title="View Only - Manager Access">
                                                    <i class="bi bi-eye"></i> View Only
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- User Count -->
                <div class="mt-3 text-muted">
                    <small>
                        <i class="bi bi-info-circle"></i> 
                        Total Users: <strong>{{ count($user_list) }}</strong>
                    </small>
                </div>
            @endif
        </div>
    </div>
@endsection