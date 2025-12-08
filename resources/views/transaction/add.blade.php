{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Transaction</title>
</head>
<body>
    <H3>Add new Transaction</H3>
    <form action="{{ url('/transaction/create') }}" method="post">
        @csrf
        Date
        <input type="date" name="transaction_date" id="">
        <br>    
        Total Amount
        <input type="decimal" name="total_amount" id="">
        <br>
        Status
        <input type="text" name="status" id="">
        <br>
        User ID
        <input type="text" name="user_id" id="">
        <br>
        Receipt ID
        <input type="text" name="receipt_id" id="">
        <br>
        <button type="submit">Add new Transaction</button>
    </form>
    <a href="{{ url('/transaction') }}">Go Back</a>
</body>
</html> --}}

@extends('layouts.master')

@section('title', 'Add Transaction')

@section('page-title')
    <i class="bi bi-receipt-cutoff"></i> Add New Transaction
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/transaction') }}">Transactions</a></li>
                    <li class="breadcrumb-item active">Add New Transaction</li>
                </ol>
            </nav>

            <!-- Form Card -->
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0"><i class="bi bi-plus-circle"></i> Add New Transaction</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/transaction/create') }}" method="POST">
                        @csrf
                        
                        <!-- Transaction Date -->
                        <div class="mb-3">
                            <label for="transaction_date" class="form-label">
                                Transaction Date <span class="text-danger">*</span>
                            </label>
                            <input type="date" 
                                   class="form-control" 
                                   id="transaction_date" 
                                   name="transaction_date" 
                                   value="{{ date('Y-m-d') }}"
                                   required>
                        </div>

                        <!-- Total Amount -->
                        <div class="mb-3">
                            <label for="total_amount" class="form-label">
                                Total Amount (₱) <span class="text-danger">*</span>
                            </label>
                            <input type="number" 
                                   class="form-control" 
                                   id="total_amount" 
                                   name="total_amount" 
                                   placeholder="0.00" 
                                   step="0.01" 
                                   min="0"
                                   required>
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label for="status" class="form-label">
                                Status <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="">Choose status...</option>
                                <option value="pending">Pending</option>
                                <option value="completed">Completed</option>
                                <option value="paid">Paid</option>
                                <option value="cancelled">Cancelled</option>
                                <option value="failed">Failed</option>
                            </select>
                        </div>

                        <!-- User ID -->
                        <div class="mb-3">
                            <label for="user_id" class="form-label">
                                User ID <span class="text-danger">*</span>
                            </label>
                            <input type="number" 
                                   class="form-control" 
                                   id="user_id" 
                                   name="user_id" 
                                   placeholder="Enter user ID" 
                                   min="1"
                                   required>
                            <small class="text-muted">The ID of the user who made this transaction</small>
                        </div>

                        <!-- Receipt ID -->
                        <div class="mb-3">
                            <label for="receipt_id" class="form-label">
                                Receipt ID <span class="text-danger">*</span>
                            </label>
                            <input type="number" 
                                   class="form-control" 
                                   id="receipt_id" 
                                   name="receipt_id" 
                                   placeholder="Enter receipt ID" 
                                   min="1"
                                   required>
                            <small class="text-muted">Unique receipt identifier</small>
                        </div>

                        <!-- Buttons -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ url('/transaction') }}" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-save"></i> Save Transaction
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection