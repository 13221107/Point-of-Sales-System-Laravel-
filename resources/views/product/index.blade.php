@extends('layouts.master')

@section('title', 'Products Management')

@section('page-title')
    <i class="bi bi-box-seam"></i> Products Management
@endsection

@section('content')
    <!-- Role Badge Display -->
    <div class="alert alert-info mb-3">
        <strong>Your Access Level:</strong>
        @if(session('role_id') == 4)
            <span class="badge bg-danger">👑 Admin - Full Access</span>
        @elseif(session('role_id') == 3)
            <span class="badge bg-primary">💼 Manager - Full Access</span>
        @elseif(session('role_id') == 2)
            <span class="badge bg-success">📦 Inventory Staff - Full Access</span>
        @else
            <span class="badge bg-warning text-dark">💰 Cashier - View Only</span>
        @endif
    </div>

    <!-- Add Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-0">Manage your product inventory</p>
        </div>
        @if(session('role_id') != 1)
            <a href="{{ url('/product/add') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Add New Product
            </a>
        @else
            <span class="badge bg-warning text-dark fs-6">
                <i class="bi bi-info-circle"></i> View Only Mode (Cashier)
            </span>
        @endif
    </div>

    <!-- Products Table Card -->
    <div class="card shadow">
        <div class="card-header bg-white">
            <h5 class="mb-0"><i class="bi bi-table"></i> Products List</h5>
        </div>
        <div class="card-body">
            @if (empty($product_list) || count($product_list) == 0)
                <div class="alert alert-info text-center" role="alert">
                    <i class="bi bi-inbox" style="font-size: 3rem;"></i>
                    <p class="mt-2 mb-3">There are no products in the database yet.</p>
                    @if(session('role_id') != 1)
                        <a href="{{ url('/product/add') }}" class="btn btn-primary">
                            <i class="bi bi-plus-circle"></i> Add Your First Product
                        </a>
                    @endif
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">#</th>
                                <th>Product Name</th>
                                <th class="text-end">Price</th>
                                <th class="text-center">Stock Level</th>
                                <th>Description</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product_list as $product)
                                <tr>
                                    <td class="text-center">{{ $product->id }}</td>
                                    <td>
                                        <strong>
                                            <i class="bi bi-box"></i> {{ $product->product_name }}
                                        </strong>
                                    </td>
                                    <td class="text-end">
                                        <strong class="text-success">
                                            ₱{{ number_format($product->price, 2) }}
                                        </strong>
                                    </td>
                                    <td class="text-center">
                                        @if($product->stocklevel > 10)
                                            <span class="badge bg-success">
                                                <i class="bi bi-check-circle"></i> {{ $product->stocklevel }}
                                            </span>
                                        @elseif($product->stocklevel > 0)
                                            <span class="badge bg-warning text-dark">
                                                <i class="bi bi-exclamation-triangle"></i> {{ $product->stocklevel }}
                                            </span>
                                            <small class="text-warning d-block">Low Stock!</small>
                                        @else
                                            <span class="badge bg-danger">
                                                <i class="bi bi-x-circle"></i> Out of Stock
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <small class="text-muted">{{ Str::limit($product->description, 50) }}</small>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            @if(session('role_id') != 1)
                                                <!-- Admin, Manager, Inventory Staff can edit/delete -->
                                                <a href="{{ url('/product/'.$product->id.'/edit') }}" 
                                                   class="btn btn-sm btn-warning" 
                                                   title="Edit Product">
                                                    <i class="bi bi-pencil"></i> Edit
                                                </a>
                                                <a href="{{ url('/product/'.$product->id.'/delete') }}" 
                                                   class="btn btn-sm btn-danger" 
                                                   title="Delete Product"
                                                   onclick="return confirm('Are you sure you want to delete {{ $product->product_name }}?')">
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

                <!-- Products Count -->
                <div class="mt-3 text-muted">
                    <small>
                        <i class="bi bi-info-circle"></i> 
                        Total Products: <strong>{{ count($product_list) }}</strong>
                    </small>
                </div>
            @endif
        </div>
    </div>
@endsection