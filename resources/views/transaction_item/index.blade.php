@extends('layouts.master')

@section('title', 'Transaction Items Management')

@section('page-title')
    <i class="bi bi-receipt"></i> Transaction Items Management
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-0">Manage transaction items and order details</p>
        </div>
        <a href="{{ url('/transaction_item/add') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Add New Transaction Item
        </a>
    </div>

    <div class="card shadow">
        <div class="card-header bg-white">
            <h5 class="mb-0"><i class="bi bi-table"></i> Transaction Items List</h5>
        </div>
        <div class="card-body">
            @if (empty($transaction_item_list) || count($transaction_item_list) == 0)
                <div class="alert alert-info text-center">
                    <i class="bi bi-info-circle"></i> No transaction items available.
                    <br>
                    <a href="{{ url('/transaction_item/add') }}" class="btn btn-primary mt-2">
                        Add Your First Transaction Item
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Subtotal</th>
                                <th>Transaction ID</th>
                                <th>Product ID</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction_item_list as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><span class="badge bg-secondary">{{ $item->quantity }}</span></td>
                                    <td><strong>₱{{ number_format($item->unit_price, 2) }}</strong></td>
                                    <td><strong class="text-success">₱{{ number_format($item->subtotal, 2) }}</strong></td>
                                    <td><span class="badge bg-info">{{ $item->transaction_id }}</span></td>
                                    <td><span class="badge bg-primary">{{ $item->product_id }}</span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ url('/transaction_item/'.$item->id.'/edit') }}" 
                                               class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                            <a href="{{ url('/transaction_item/'.$item->id.'/delete') }}" 
                                               class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i> Delete
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