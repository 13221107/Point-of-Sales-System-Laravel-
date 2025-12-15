{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
</head>
<body>
    @if (empty($receipt_list))
        There are no data in the receipt table
    @else
        <table>
            <thead>
                <th>Date</th>
                <th>Printed By</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($receipt_list as $receipts)
                    <tr>
                        <td>{{ $receipts->date }}</td>
                        <td>{{ $receipts->printed_by_user_id }}</td>
                        <td>
                            <a href="{{ url('/receipt/'.$receipts->id.'/edit') }}">Edit</a>
                            <a href="{{ url('/receipt/'.$receipts->id.'/delete') }}">Delete</a>
                        </td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
    @endif
    <a href="{{ url('/receipt/add') }}">Add New Receipt</a>
</body>
</html> --}}
@extends('layouts.master')

@section('title', 'Receipts Management')

@section('page-title')
    <i class="bi bi-receipt"></i> Receipts Management
@endsection

@section('content')
    <!-- Add Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-0">Track and manage all receipts</p>
        </div>
        <a href="{{ url('/receipt/add') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Add New Receipt
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
                    <i class="bi bi-info-circle"></i> There are no receipts in the database yet.
                    <br>
                    <a href="{{ url('/receipt/add') }}" class="btn btn-primary mt-2">
                        Add Your First Receipt
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Receipt ID</th>
                                <th>Date</th>
                                <th>Printed By (User ID)</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($receipt_list as $receipts)
                                <tr>
                                    <td>
                                        <span class="badge bg-primary">
                                            <i class="bi bi-receipt"></i> #{{ $receipts->id }}
                                        </span>
                                    </td>
                                    <td>
                                        <i class="bi bi-calendar3"></i> 
                                        {{ date('M d, Y', strtotime($receipts->date)) }}
                                    </td>
                                    <td>
                                        <span class="badge bg-info">
                                            <i class="bi bi-person"></i> User #{{ $receipts->printed_by_user_id }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ url('/receipt/'.$receipts->id.'/edit') }}" 
                                               class="btn btn-sm btn-warning" 
                                               title="Edit">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                            <a href="{{ url('/receipt/'.$receipts->id.'/delete') }}" 
                                               class="btn btn-sm btn-danger" 
                                               title="Delete">
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