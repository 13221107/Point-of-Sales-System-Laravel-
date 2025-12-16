@extends('layouts.master')

@section('title', 'Delete Log Entry')

@section('page-title')
    <i class="bi bi-trash"></i> Delete Log Entry
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/log') }}">Activity Logs</a></li>
                    <li class="breadcrumb-item active">Delete</li>
                </ol>
            </nav>

            <div class="card shadow border-danger">
                <div class="card-header bg-danger text-white">
                    <h4 class="mb-0"><i class="bi bi-exclamation-triangle"></i> Confirm Deletion</h4>
                </div>
                <div class="card-body text-center">
                    <i class="bi bi-trash text-danger" style="font-size: 4rem;"></i>
                    <h5 class="mt-3">Are you sure you want to delete this log entry?</h5>
                    
                    <div class="alert alert-light mt-4 text-start">
                        <table class="table table-borderless mb-0">
                            <tr>
                                <th width="40%">Log ID:</th>
                                <td><strong>#{{ $log_entry[0]->logID }}</strong></td>
                            </tr>
                            <tr>
                                <th>Action Type:</th>
                                <td>
                                    @if($log_entry[0]->ActionType == 'created')
                                        <span class="badge bg-success">{{ ucfirst($log_entry[0]->ActionType) }}</span>
                                    @elseif($log_entry[0]->ActionType == 'updated')
                                        <span class="badge bg-warning">{{ ucfirst($log_entry[0]->ActionType) }}</span>
                                    @elseif($log_entry[0]->ActionType == 'deleted')
                                        <span class="badge bg-danger">{{ ucfirst($log_entry[0]->ActionType) }}</span>
                                    @else
                                        <span class="badge bg-info">{{ ucfirst($log_entry[0]->ActionType) }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Entity Type:</th>
                                <td><span class="badge bg-primary">{{ ucfirst($log_entry[0]->entityType) }}</span></td>
                            </tr>
                            <tr>
                                <th>Entity ID:</th>
                                <td><code>{{ $log_entry[0]->entityID }}</code></td>
                            </tr>
                            <tr>
                                <th>User ID:</th>
                                <td><span class="badge bg-secondary">{{ $log_entry[0]->userID }}</span></td>
                            </tr>
                            <tr>
                                <th>Timestamp:</th>
                                <td><small>{{ \Carbon\Carbon::parse($log_entry[0]->timestamp)->format('M d, Y h:i A') }}</small></td>
                            </tr>
                            @if($log_entry[0]->details)
                            <tr>
                                <th>Details:</th>
                                <td><small>{{ $log_entry[0]->details }}</small></td>
                            </tr>
                            @endif
                        </table>
                    </div>

                    <div class="alert alert-warning">
                        <i class="bi bi-exclamation-circle"></i> 
                        <strong>Warning:</strong> This action cannot be undone! This will permanently remove the log entry from the records.
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                        <a href="{{ url('/log') }}" class="btn btn-secondary btn-lg">
                            <i class="bi bi-x-circle"></i> No, Go Back
                        </a>
                        <a href="{{ url('/log/'.$log_entry[0]->logID.'/destroy') }}" 
                           class="btn btn-danger btn-lg">
                            <i class="bi bi-trash"></i> Yes, Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection