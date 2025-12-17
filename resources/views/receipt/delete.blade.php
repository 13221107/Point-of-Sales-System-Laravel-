@extends('layouts.master')

@section('title', 'Delete Receipt')

@section('page-title')
    <i class="bi bi-trash"></i> Delete Receipt
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/receipt') }}">Receipts</a></li>
                    <li class="breadcrumb-item active">Delete Receipt</li>
                </ol>
            </nav>

            <!-- Delete Confirmation Card -->
            <div class="card shadow border-danger">
                <div class="card-header bg-danger text-white">
                    <h4 class="mb-0"><i class="bi bi-exclamation-triangle"></i> Confirm Deletion</h4>
                </div>
                <div class="card-body text-center">
                    <i class="bi bi-receipt-cutoff text-danger" style="font-size: 4rem;"></i>
                    <h5 class="mt-3">Are you sure you want to delete this receipt?</h5>
                    
                    <!-- Receipt Details -->
                    <div class="alert alert-light mt-4 text-start">
                        <table class="table table-borderless mb-0">
                            <tr>
                                <th width="40%">Receipt ID:</th>
                                <td><strong>#{{ $receipt_entry[0]->id }}</strong></td>
                            </tr>
                            <tr>
                                <th>Date:</th>
                                <td>{{ date('M d, Y', strtotime($receipt_entry[0]->date)) }}</td>
                            </tr>
                            <tr>
                                <th>Printed By:</th>
                                <td>User #{{ $receipt_entry[0]->printed_by_user_id }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="alert alert-warning" role="alert">
                        <i class="bi bi-exclamation-circle"></i> 
                        <strong>Warning:</strong> This action cannot be undone!
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                        <a href="{{ url('/receipt') }}" class="btn btn-secondary btn-lg">
                            <i class="bi bi-x-circle"></i> No, Go Back
                        </a>
                        <a href="{{ url('/receipt/'.$receipt_entry[0]->id.'/destroy') }}" class="btn btn-danger btn-lg">
                            <i class="bi bi-trash"></i> Yes, Delete Receipt
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection