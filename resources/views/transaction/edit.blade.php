@extends('layouts.master')

@section('title', 'Edit Transaction')

@section('page-title')
    <i class="bi bi-pencil-square"></i> Edit Transaction
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/transaction') }}">Transactions</a></li>
                    <li class="breadcrumb-item active">Edit Transaction</li>
                </ol>
            </nav>

            <!-- Form Card -->
            <div class="card shadow">
                <div class="card-header bg-warning">
                    <h4 class="mb-0"><i class="bi bi-pencil"></i> Edit Transaction</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('transaction/'.$transaction_entry[0]->id.'/update') }}" method="POST">
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
                                   value="{{ $transaction_entry[0]->transaction_date }}"
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
                                   value="{{ $transaction_entry[0]->total_amount }}"
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
                                <option value="pending" {{ strtolower($transaction_entry[0]->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="completed" {{ strtolower($transaction_entry[0]->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="paid" {{ strtolower($transaction_entry[0]->status) == 'paid' ? 'selected' : '' }}>Paid</option>
                                <option value="cancelled" {{ strtolower($transaction_entry[0]->status) == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                <option value="failed" {{ strtolower($transaction_entry[0]->status) == 'failed' ? 'selected' : '' }}>Failed</option>
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
                                   value="{{ $transaction_entry[0]->user_id }}"
                                   min="1"
                                   required>
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
                                   value="{{ $transaction_entry[0]->receipt_id }}"
                                   min="1"
                                   required>
                        </div>

                        <!-- Buttons -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ url('/transaction') }}" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-warning">
                                <i class="bi bi-save"></i> Update Transaction
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection