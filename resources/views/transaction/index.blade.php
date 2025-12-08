{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction</title>
</head>
<body>
    @if (empty($transaction_list))
        There are no data in the transaction table
    @else
        <table>
                <thead>
                    <th>Transaction Date</th>
                    <th>Total Amount</th>
                    <th>Status</th>
                    <th>User ID</th>
                    <th>Receipt ID</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ( $transaction_list as $transactions)
                        <tr>
                            <td>{{ $transactions->transaction_date }}</td>
                            <td>{{ $transactions->total_amount }}</td>
                            <td>{{ $transactions->status }}</td>
                            <td>{{  $transactions->user_id }}</td>
                            <td>{{ $transactions->receipt_id }}</td>
                            <td>
                                <a href="{{ url('transaction/'.$transactions->id.'/edit') }}">Edit</a>
                                <a href="{{ url('transaction/'.$transactions->id.'/delete') }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    @endif
    <br>
    <a href="{{ url('/transaction/add') }}">Add new Transaction</a>
</body>
</html> --}}

@extends('layouts.master')

@section('title', 'Transactions Management')

@section('page-title')
    <i class="bi bi-receipt"></i> Transactions Management
@endsection

@section('content')
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
                    <i class="bi bi-info-circle"></i> There are no transactions in the database yet.
                    <br>
                    <a href="{{ url('/transaction/add') }}" class="btn btn-primary mt-2">
                        Add Your First Transaction
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>User ID</th>
                                <th>Receipt ID</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction_list as $transactions)
                                <tr>
                                    <td>{{ $transactions->id }}</td>
                                    <td>
                                        <i class="bi bi-calendar3"></i> 
                                        {{ date('M d, Y', strtotime($transactions->transaction_date)) }}
                                    </td>
                                    <td>
                                        <span class="badge bg-success fs-6">
                                            ₱{{ number_format($transactions->total_amount, 2) }}
                                        </span>
                                    </td>
                                    <td>
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
                                    <td>
                                        <span class="badge bg-info">User #{{ $transactions->user_id }}</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary">Receipt #{{ $transactions->receipt_id }}</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ url('transaction/'.$transactions->id.'/edit') }}" 
                                               class="btn btn-sm btn-warning" 
                                               title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="{{ url('transaction/'.$transactions->id.'/delete') }}" 
                                               class="btn btn-sm btn-danger" 
                                               title="Delete">
                                                <i class="bi bi-trash"></i>
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