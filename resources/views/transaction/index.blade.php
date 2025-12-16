@extends('layouts.master')

@section('title', 'Transactions Management')

@section('page-title')
    <i class="bi bi-receipt"></i> Transactions Management
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
            <span class="badge bg-warning text-dark">💰 Cashier - Create & View Only</span>
        @endif
    </div>

    <!-- Add Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-0">Track and manage all transactions</p>
        </div>
        <a href="{{ url('/transaction/add') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Add New Transaction
        </a>
    </div>

    <!-- Transactions Table Card -->
    <div class="card shadow">
        <div class="card-header bg-white">
            <h5 class="mb-0"><i class="bi bi-table"></i> Transactions List</h5>
        </div>
        <div class="card-body">
            @if (empty($transaction_list) || count($transaction_list) == 0)
                <div class="alert alert-info text-center" role="alert">
                    <i class="bi bi-inbox" style="font-size: 3rem;"></i>
                    <p class="mt-2 mb-3">There are no transactions in the database yet.</p>
                    <a href="{{ url('/transaction/add') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Add Your First Transaction
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">#</th>
                                <th>Date</th>
                                <th class="text-end">Total Amount</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">User ID</th>
                                <th class="text-center">Receipt ID</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction_list as $transactions)
                                <tr>
                                    <td class="text-center">
                                        <strong class="text-primary">{{ $transactions->id }}</strong>
                                    </td>
                                    <td>
                                        <i class="bi bi-calendar-event"></i> 
                                        {{ date('M d, Y', strtotime($transactions->transaction_date)) }}
                                        <br>
                                        <small class="text-muted">
                                            <i class="bi bi-clock"></i> {{ date('h:i A', strtotime($transactions->transaction_date)) }}
                                        </small>
                                    </td>
                                    <td class="text-end">
                                        <strong class="text-success fs-6">
                                            ₱{{ number_format($transactions->total_amount, 2) }}
                                        </strong>
                                    </td>
                                    <td class="text-center">
                                        @if(strtolower($transactions->status) == 'completed' || strtolower($transactions->status) == 'paid')
                                            <span class="badge bg-success">
                                                <i class="bi bi-check-circle"></i> {{ ucfirst($transactions->status) }}
                                            </span>
                                        @elseif(strtolower($transactions->status) == 'pending')
                                            <span class="badge bg-warning text-dark">
                                                <i class="bi bi-clock"></i> {{ ucfirst($transactions->status) }}
                                            </span>
                                        @elseif(strtolower($transactions->status) == 'cancelled' || strtolower($transactions->status) == 'failed')
                                            <span class="badge bg-danger">
                                                <i class="bi bi-x-circle"></i> {{ ucfirst($transactions->status) }}
                                            </span>
                                        @else
                                            <span class="badge bg-secondary">{{ ucfirst($transactions->status) }}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-info">
                                            <i class="bi bi-person"></i> User #{{ $transactions->user_id }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-secondary">
                                            <i class="bi bi-receipt"></i> Receipt #{{ $transactions->receipt_id }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            @if(in_array(session('role_id'), [3, 4]))
                                                <!-- Manager & Admin can edit/delete -->
                                                <a href="{{ url('transaction/'.$transactions->id.'/edit') }}" 
                                                   class="btn btn-sm btn-warning"
                                                   title="Edit Transaction">
                                                    <i class="bi bi-pencil"></i> Edit
                                                </a>
                                                <a href="{{ url('transaction/'.$transactions->id.'/delete') }}" 
                                                   class="btn btn-sm btn-danger"
                                                   title="Delete Transaction"
                                                   onclick="return confirm('Are you sure you want to delete transaction #{{ $transactions->id }}?')">
                                                    <i class="bi bi-trash"></i> Delete
                                                </a>
                                            @else
                                                <!-- Cashier can only view -->
                                                <button class="btn btn-sm btn-info" 
                                                        disabled 
                                                        title="View Only - Cashier Access">
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

                <!-- Transaction Summary -->
                <div class="row mt-3">
                    <div class="col-md-6">
                        <small class="text-muted">
                            <i class="bi bi-info-circle"></i> 
                            Total Transactions: <strong>{{ count($transaction_list) }}</strong>
                        </small>
                    </div>
                    <div class="col-md-6 text-end">
                        <small class="text-muted">
                            <i class="bi bi-cash-stack"></i> 
                            Total Amount: <strong class="text-success">₱{{ number_format($transaction_list->sum('total_amount'), 2) }}</strong>
                        </small>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection