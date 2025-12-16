@extends('layouts.master')

@section('title', 'Add Transaction Item')

@section('page-title')
    <i class="bi bi-plus-circle"></i> Add New Transaction Item
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/transaction_item') }}">Transaction Items</a></li>
                    <li class="breadcrumb-item active">Add New</li>
                </ol>
            </nav>

            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0"><i class="bi bi-plus-circle"></i> Add New Transaction Item</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/transaction_item/create') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <!-- Quantity Field -->
                            <div class="col-md-6 mb-3">
                                <label for="quantity" class="form-label">
                                    Quantity <span class="text-danger">*</span>
                                </label>
                                <input type="number" 
                                       class="form-control" 
                                       id="quantity" 
                                       name="quantity" 
                                       placeholder="Enter quantity"
                                       min="1"
                                       required>
                                <small class="text-muted">Number of items</small>
                            </div>

                            <!-- Unit Price Field -->
                            <div class="col-md-6 mb-3">
                                <label for="unit_price" class="form-label">
                                    Unit Price <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">₱</span>
                                    <input type="number" 
                                           class="form-control" 
                                           id="unit_price" 
                                           name="unit_price" 
                                           placeholder="0.00"
                                           step="0.01"
                                           min="0"
                                           required>
                                </div>
                                <small class="text-muted">Price per unit</small>
                            </div>
                        </div>

                        <!-- Subtotal Field -->
                        <div class="mb-3">
                            <label for="subtotal" class="form-label">
                                Subtotal <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">₱</span>
                                <input type="number" 
                                       class="form-control" 
                                       id="subtotal" 
                                       name="subtotal" 
                                       placeholder="0.00"
                                       step="0.01"
                                       min="0"
                                       required>
                            </div>
                            <small class="text-muted">Total amount (Quantity × Unit Price)</small>
                        </div>

                        <div class="row">
                            <!-- Transaction ID Field -->
                            <div class="col-md-6 mb-3">
                                <label for="transaction_id" class="form-label">
                                    Transaction ID <span class="text-danger">*</span>
                                </label>
                                <input type="text" 
                                       class="form-control" 
                                       id="transaction_id" 
                                       name="transaction_id" 
                                       placeholder="Enter transaction ID"
                                       required>
                                <small class="text-muted">Related transaction reference</small>
                            </div>

                            <!-- Product ID Field -->
                            <div class="col-md-6 mb-3">
                                <label for="product_id" class="form-label">
                                    Product ID <span class="text-danger">*</span>
                                </label>
                                <input type="text" 
                                       class="form-control" 
                                       id="product_id" 
                                       name="product_id" 
                                       placeholder="Enter product ID"
                                       required>
                                <small class="text-muted">Product reference number</small>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <a href="{{ url('/transaction_item') }}" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-save"></i> Save Transaction Item
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection