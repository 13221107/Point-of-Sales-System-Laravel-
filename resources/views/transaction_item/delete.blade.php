@extends('layouts.master')

@section('title', 'Delete Transaction Item')

@section('page-title')
    <i class="bi bi-trash"></i> Delete Transaction Item
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/transaction_item') }}">Transaction Items</a></li>
                    <li class="breadcrumb-item active">Delete</li>
                </ol>
            </nav>

            <div class="card shadow border-danger">
                <div class="card-header bg-danger text-white">
                    <h4 class="mb-0"><i class="bi bi-exclamation-triangle"></i> Confirm Deletion</h4>
                </div>
                <div class="card-body text-center">
                    <i class="bi bi-trash text-danger" style="font-size: 4rem;"></i>
                    <h5 class="mt-3">Are you sure you want to delete this transaction item?</h5>
                    
                    <div class="alert alert-light mt-4 text-start">
                        <table class="table table-borderless mb-0">
                            <tr>
                                <th width="40%">Item ID:</th>
                                <td><strong>{{ $transaction_item_entry[0]->id }}</strong></td>
                            </tr>
                            <tr>
                                <th>Quantity:</th>
                                <td><span class="badge bg-secondary">{{ $transaction_item_entry[0]->quantity }}</span></td>
                            </tr>
                            <tr>
                                <th>Unit Price:</th>
                                <td><strong>₱{{ number_format($transaction_item_entry[0]->unit_price, 2) }}</strong></td>
                            </tr>
                            <tr>
                                <th>Subtotal:</th>
                                <td><strong class="text-success">₱{{ number_format($transaction_item_entry[0]->subtotal, 2) }}</strong></td>
                            </tr>
                            <tr>
                                <th>Transaction ID:</th>
                                <td><span class="badge bg-info">{{ $transaction_item_entry[0]->transaction_id }}</span></td>
                            </tr>
                            <tr>
                                <th>Product ID:</th>
                                <td><span class="badge bg-primary">{{ $transaction_item_entry[0]->product_id }}</span></td>
                            </tr>
                        </table>
                    </div>

                    <div class="alert alert-warning">
                        <i class="bi bi-exclamation-circle"></i> 
                        <strong>Warning:</strong> This action cannot be undone! This will permanently remove the transaction item from the records.
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                        <a href="{{ url('/transaction_item') }}" class="btn btn-secondary btn-lg">
                            <i class="bi bi-x-circle"></i> No, Go Back
                        </a>
                        <a href="{{ url('/transaction_item/'.$transaction_item_entry[0]->id.'/destroy') }}" 
                           class="btn btn-danger btn-lg">
                            <i class="bi bi-trash"></i> Yes, Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection