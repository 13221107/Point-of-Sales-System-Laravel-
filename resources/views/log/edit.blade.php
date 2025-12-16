@extends('layouts.master')

@section('title', 'Edit Log Entry')

@section('page-title')
    <i class="bi bi-pencil-square"></i> Edit Log Entry
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/log') }}">Activity Logs</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>

            <div class="card shadow">
                <div class="card-header bg-warning">
                    <h4 class="mb-0"><i class="bi bi-pencil"></i> Edit Log Entry</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/log/'.$log_entry[0]->logID.'/update') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <!-- Action Type Field -->
                            <div class="col-md-6 mb-3">
                                <label for="ActionType" class="form-label">
                                    Action Type <span class="text-danger">*</span>
                                </label>
                                <select class="form-select" 
                                        id="ActionType" 
                                        name="ActionType" 
                                        required>
                                    <option value="">Select Action Type</option>
                                    <option value="created" {{ $log_entry[0]->ActionType == 'created' ? 'selected' : '' }}>Created</option>
                                    <option value="updated" {{ $log_entry[0]->ActionType == 'updated' ? 'selected' : '' }}>Updated</option>
                                    <option value="deleted" {{ $log_entry[0]->ActionType == 'deleted' ? 'selected' : '' }}>Deleted</option>
                                    <option value="viewed" {{ $log_entry[0]->ActionType == 'viewed' ? 'selected' : '' }}>Viewed</option>
                                    <option value="logged_in" {{ $log_entry[0]->ActionType == 'logged_in' ? 'selected' : '' }}>Logged In</option>
                                    <option value="logged_out" {{ $log_entry[0]->ActionType == 'logged_out' ? 'selected' : '' }}>Logged Out</option>
                                    <option value="other" {{ $log_entry[0]->ActionType == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                                <small class="text-muted">Type of action performed</small>
                            </div>

                            <!-- Entity Type Field -->
                            <div class="col-md-6 mb-3">
                                <label for="entityType" class="form-label">
                                    Entity Type <span class="text-danger">*</span>
                                </label>
                                <select class="form-select" 
                                        id="entityType" 
                                        name="entityType" 
                                        required>
                                    <option value="">Select Entity Type</option>
                                    <option value="product" {{ $log_entry[0]->entityType == 'product' ? 'selected' : '' }}>Product</option>
                                    <option value="transaction" {{ $log_entry[0]->entityType == 'transaction' ? 'selected' : '' }}>Transaction</option>
                                    <option value="user" {{ $log_entry[0]->entityType == 'user' ? 'selected' : '' }}>User</option>
                                    <option value="category" {{ $log_entry[0]->entityType == 'category' ? 'selected' : '' }}>Category</option>
                                    <option value="order" {{ $log_entry[0]->entityType == 'order' ? 'selected' : '' }}>Order</option>
                                    <option value="customer" {{ $log_entry[0]->entityType == 'customer' ? 'selected' : '' }}>Customer</option>
                                    <option value="other" {{ $log_entry[0]->entityType == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                                <small class="text-muted">Type of entity affected</small>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Entity ID Field -->
                            <div class="col-md-6 mb-3">
                                <label for="entityID" class="form-label">
                                    Entity ID <span class="text-danger">*</span>
                                </label>
                                <input type="number" 
                                       class="form-control" 
                                       id="entityID" 
                                       name="entityID" 
                                       value="{{ $log_entry[0]->entityID }}"
                                       min="1"
                                       required>
                                <small class="text-muted">ID of the affected entity</small>
                            </div>

                            <!-- User ID Field -->
                            <div class="col-md-6 mb-3">
                                <label for="userID" class="form-label">
                                    User ID <span class="text-danger">*</span>
                                </label>
                                <input type="number" 
                                       class="form-control" 
                                       id="userID" 
                                       name="userID" 
                                       value="{{ $log_entry[0]->userID }}"
                                       min="1"
                                       required>
                                <small class="text-muted">ID of the user who performed the action</small>
                            </div>
                        </div>

                        <!-- Details Field -->
                        <div class="mb-3">
                            <label for="details" class="form-label">
                                Details
                            </label>
                            <textarea class="form-control" 
                                      id="details" 
                                      name="details" 
                                      rows="4"
                                      placeholder="Enter additional details about this action (optional)">{{ $log_entry[0]->details }}</textarea>
                            <small class="text-muted">Additional information about the action</small>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <a href="{{ url('/log') }}" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-warning">
                                <i class="bi bi-save"></i> Update Log Entry
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection