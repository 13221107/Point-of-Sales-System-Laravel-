@extends('layouts.master')

@section('title', 'Activity Logs')

@section('page-title')
    <i class="bi bi-clock-history"></i> Activity Logs
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-0">Monitor all system activities and changes</p>
        </div>
        <a href="{{ url('/log/add') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Add New Log Entry
        </a>
    </div>

    <div class="card shadow">
        <div class="card-header bg-white">
            <h5 class="mb-0"><i class="bi bi-table"></i> Activity Log List</h5>
        </div>
        <div class="card-body">
            @if (empty($log_list) || count($log_list) == 0)
                <div class="alert alert-info text-center">
                    <i class="bi bi-info-circle"></i> No activity logs available.
                    <br>
                    <a href="{{ url('/log/add') }}" class="btn btn-primary mt-2">
                        Add Your First Log Entry
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Log ID</th>
                                <th>Action Type</th>
                                <th>Entity Type</th>
                                <th>Entity ID</th>
                                <th>User</th>
                                <th>Timestamp</th>
                                <th>Details</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($log_list as $log)
                                <tr>
                                    <td><strong>#{{ $log->logID }}</strong></td>
                                    <td>
                                        @if($log->ActionType == 'created')
                                            <span class="badge bg-success">{{ ucfirst($log->ActionType) }}</span>
                                        @elseif($log->ActionType == 'updated')
                                            <span class="badge bg-warning">{{ ucfirst($log->ActionType) }}</span>
                                        @elseif($log->ActionType == 'deleted')
                                            <span class="badge bg-danger">{{ ucfirst($log->ActionType) }}</span>
                                        @else
                                            <span class="badge bg-info">{{ ucfirst($log->ActionType) }}</span>
                                        @endif
                                    </td>
                                    <td><span class="badge bg-primary">{{ ucfirst($log->entityType) }}</span></td>
                                    <td><code>{{ $log->entityID }}</code></td>
                                    <td>
                                        @if($log->user)
                                            <span class="badge bg-secondary">{{ $log->user->name ?? 'User #'.$log->userID }}</span>
                                        @else
                                            <span class="badge bg-secondary">User #{{ $log->userID }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <small>{{ \Carbon\Carbon::parse($log->timestamp)->format('M d, Y h:i A') }}</small>
                                    </td>
                                    <td>
                                        @if($log->details)
                                            <button class="btn btn-sm btn-outline-info" 
                                                    data-bs-toggle="tooltip" 
                                                    title="{{ $log->details }}">
                                                <i class="bi bi-eye"></i> View
                                            </button>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ url('/log/'.$log->logID.'/edit') }}" 
                                               class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                            <a href="{{ url('/log/'.$log->logID.'/delete') }}" 
                                               class="btn btn-sm btn-danger">
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

    @push('scripts')
    <script>
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    @endpush
@endsectionphpp