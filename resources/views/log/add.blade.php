@extends('layouts.master')

@section('title', 'Add Log Entry')

@section('page-title')
    <i class="bi bi-plus-circle"></i> Add New Log Entry
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/log') }}">Activity Logs</a></li>
                    <li class="breadcrumb-item active">Add New</li>
                </ol>
            </nav>

            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0"><i class="bi bi-plus-circle"></i> Add New Log Entry</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/log/create') }}" method="POST">
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
                                    <option value="created">Created</option>
                                    <option value="updated">Updated</option>
                                    <option value="deleted">Deleted</option>
                                    <option value="viewed">Viewed</option>
                                    <option value="logged_in">Logged In</option>
                                    <option value="logged_out">Logged Out</option>
                                    <option value="other">Other</option>
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
                                    <option value="product">Product</option>
                                    <option value="transaction">Transaction</option>
                                    <option value="user">User</option>
                                    <option value="category">Category</option>
                                    <option value="order">Order</option>
                                    <option value="customer">Customer</option>
                                    <option value="other">Other</option>
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
                                       placeholder="Enter entity ID"
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
                                       placeholder="Enter user ID"
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
                                      placeholder="Enter additional details about this action (optional)"></textarea>
                            <small class="text-muted">Additional information about the action</small>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <a href="{{ url('/log') }}" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-save"></i> Save Log Entry
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection 