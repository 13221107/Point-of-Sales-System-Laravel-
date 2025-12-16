@extends('layouts.master')

@section('title', 'Receipts Management')

@section('page-title')
    <i class="bi bi-receipt"></i> Receipts Management
@endsection

@section('content')
    <!-- Role Badge Display -->
    <div class="alert alert-info mb-3">
        <strong>Your Access Level:</strong>
        @if(session('role_id') == 4)
            <span class="badge bg-danger">👑 Admin - Full Access</span>
        @elseif(session('role_id') == 3)
            <span class="badge bg-primary">💼 Manager - Full Access</span>
        @else
            <span class="badge bg-warning text-dark">💰 Cashier - Create & Print Only</span>
        @endif
    </div>

    <!-- Add Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-0">Track and manage all receipts</p>
        </div>
        <a href="{{ url('/receipt/add') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Generate New Receipt
        </a>
    </div>

    <!-- Receipts Table Card -->
    <div class="card shadow">
        <div class="card-header bg-white">
            <h5 class="mb-0"><i class="bi bi-table"></i> Receipts List</h5>
        </div>
        <div class="card-body">
            @if (empty($receipt_list) || count($receipt_list) == 0)
                <div class="alert alert-info text-center" role="alert">
                    <i class="bi bi-inbox" style="font-size: 3rem;"></i>
                    <p class="mt-2 mb-3">There are no receipts in the database yet.</p>
                    <a href="{{ url('/receipt/add') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Generate Your First Receipt
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">Receipt ID</th>
                                <th>Date Issued</th>
                                <th class="text-center">Printed By</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($receipt_list as $receipts)
                                <tr>
                                    <td class="text-center">
                                        <span class="badge bg-primary fs-6">
                                            <i class="bi bi-receipt-cutoff"></i> #{{ $receipts->id }}
                                        </span>
                                    </td>
                                    <td>
                                        <i class="bi bi-calendar-check"></i> 
                                        {{ date('M d, Y', strtotime($receipts->date)) }}
                                        <br>
                                        <small class="text-muted">
                                            <i class="bi bi-clock"></i> {{ date('h:i A', strtotime($receipts->date)) }}
                                        </small>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-info">
                                            <i class="bi bi-person-badge"></i> User #{{ $receipts->printed_by_user_id }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            @if(in_array(session('role_id'), [3, 4]))
                                                <!-- Manager & Admin can edit/delete -->
                                                <a href="{{ url('/receipt/'.$receipts->id.'/view') }}" 
                                                   class="btn btn-sm btn-info" 
                                                   title="View Receipt">
                                                    <i class="bi bi-eye"></i> View
                                                </a>
                                                <a href="{{ url('/receipt/'.$receipts->id.'/edit') }}" 
                                                   class="btn btn-sm btn-warning" 
                                                   title="Edit Receipt">
                                                    <i class="bi bi-pencil"></i> Edit
                                                </a>
                                                <a href="{{ url('/receipt/'.$receipts->id.'/delete') }}" 
                                                   class="btn btn-sm btn-danger" 
                                                   title="Delete Receipt"
                                                   onclick="return confirm('Are you sure you want to delete receipt #{{ $receipts->id }}?')">
                                                    <i class="bi bi-trash"></i> Delete
                                                </a>
                                            @else
                                                <!-- Cashier can only view and print -->
                                                <a href="{{ url('/receipt/'.$receipts->id.'/view') }}" 
                                                   class="btn btn-sm btn-info" 
                                                   title="View Receipt">
                                                    <i class="bi bi-eye"></i> View
                                                </a>
                                                <a href="{{ url('/receipt/'.$receipts->id.'/print') }}" 
                                                   class="btn btn-sm btn-secondary" 
                                                   target="_blank"
                                                   title="Print Receipt">
                                                    <i class="bi bi-printer"></i> Print
                                                </a>
                                                <button class="btn btn-sm btn-outline-secondary" 
                                                        disabled 
                                                        title="Edit requires Manager or Admin privileges">
                                                    <i class="bi bi-lock"></i> Locked
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Receipt Count -->
                <div class="mt-3 text-muted">
                    <small>
                        <i class="bi bi-info-circle"></i> 
                        Total Receipts: <strong>{{ count($receipt_list) }}</strong>
                    </small>
                </div>

                <!-- Print All Button (Available to all roles) -->
                @if(count($receipt_list) > 0)
                    <div class="text-end mt-3">
                        <a href="{{ url('/receipt/print-all') }}" 
                           class="btn btn-outline-primary"
                           target="_blank">
                            <i class="bi bi-printer-fill"></i> Print All Receipts
                        </a>
                    </div>
                @endif
            @endif
        </div>
    </div>
@endsection