@extends('layouts.master')

@section('title', 'Edit Receipt')

@section('page-title')
    <i class="bi bi-pencil-square"></i> Edit Receipt
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/receipt') }}">Receipts</a></li>
                    <li class="breadcrumb-item active">Edit Receipt</li>
                </ol>
            </nav>

            <!-- Form Card -->
            <div class="card shadow">
                <div class="card-header bg-warning">
                    <h4 class="mb-0"><i class="bi bi-pencil"></i> Edit Receipt</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/receipt/'.$receipt_entry[0]->id.'/update') }}" method="POST">
                        @csrf
                        
                        <!-- Date -->
                        <div class="mb-3">
                            <label for="date" class="form-label">
                                Date <span class="text-danger">*</span>
                            </label>
                            <input type="date" 
                                   class="form-control" 
                                   id="date" 
                                   name="date" 
                                   value="{{ $receipt_entry[0]->date }}"
                                   required>
                        </div>

                        <!-- Printed By User ID -->
                        <div class="mb-3">
                            <label for="printed_by_user_id" class="form-label">
                                Printed By (User ID) <span class="text-danger">*</span>
                            </label>
                            <input type="number" 
                                   class="form-control" 
                                   id="printed_by_user_id" 
                                   name="printed_by_user_id" 
                                   value="{{ $receipt_entry[0]->printed_by_user_id }}"
                                   min="1"
                                   required>
                        </div>

                        <!-- Buttons -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ url('/receipt') }}" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-warning">
                                <i class="bi bi-save"></i> Update Receipt
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection