{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category Delete</title>
</head>
<body>
    Are you sure you want to delete category " <b>{{ $transaction_entry[0]->id }}</b>"?
    <a href="{{ url('/transaction/'.$transaction_entry[0]->id.'/destroy') }}">Yes</a>
    <a href="{{ url('/transaction   ') }}">No</a>
</body>
</html> --}}

@extends('layouts.master')

@section('title', 'Delete Transaction')

@section('page-title')
    <i class="bi bi-trash"></i> Delete Transaction
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/transaction') }}">Transactions</a></li>
                    <li class="breadcrumb-item active">Delete Transaction</li>
                </ol>
            </nav>

            <!-- Delete Confirmation Card -->
            <div class="card shadow border-danger">
                <div class="card-header bg-danger text-white">
                    <h4 class="mb-0"><i class="bi bi-exclamation-triangle"></i> Confirm Deletion</h4>
                </div>
                <div class="card-body text-center">
                    <i class="bi bi-receipt-cutoff text-danger" style="font-size: 4rem;"></i>
                    <h5 class="mt-3">Are you sure you want to delete this transaction?</h5>
                    
                    <!-- Transaction Details -->
                    <div class="alert alert-light mt-4 text-start">
                        <table class="table table-borderless mb-0">
                            <tr>
                                <th width="40%">Transaction ID:</th>
                                <td><strong>#{{ $transaction_entry[0]->id }}</strong></td>
                            </tr>
                            <tr>
                                <th>Date:</th>
                                <td>{{ date('M d, Y', strtotime($transaction_entry[0]->transaction_date)) }}</td>
                            </tr>
                            <tr>
                                <th>Total Amount:</th>
                                <td>
                                    <span class="badge bg-success">
                                        ₱{{ number_format($transaction_entry[0]->total_amount, 2) }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Status:</th>
                                <td>
                                    @if(strtolower($transaction_entry[0]->status) == 'completed' || strtolower($transaction_entry[0]->status) == 'paid')
                                        <span class="badge bg-success">{{ ucfirst($transaction_entry[0]->status) }}</span>
                                    @elseif(strtolower($transaction_entry[0]->status) == 'pending')
                                        <span class="badge bg-warning text-dark">{{ ucfirst($transaction_entry[0]->status) }}</span>
                                    @else
                                        <span class="badge bg-danger">{{ ucfirst($transaction_entry[0]->status) }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>User ID:</th>
                                <td>{{ $transaction_entry[0]->user_id }}</td>
                            </tr>
                            <tr>
                                <th>Receipt ID:</th>
                                <td>{{ $transaction_entry[0]->receipt_id }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="alert alert-warning" role="alert">
                        <i class="bi bi-exclamation-circle"></i> 
                        <strong>Warning:</strong> This action cannot be undone!
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                        <a href="{{ url('/transaction') }}" class="btn btn-secondary btn-lg">
                            <i class="bi bi-x-circle"></i> No, Go Back
                        </a>
                        <a href="{{ url('/transaction/'.$transaction_entry[0]->id.'/destroy') }}" class="btn btn-danger btn-lg">
                            <i class="bi bi-trash"></i> Yes, Delete Transaction
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection