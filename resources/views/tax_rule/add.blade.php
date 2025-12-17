@extends('layouts.master')

@section('title', 'Add Tax Rule')

@section('page-title')
    <i class="bi bi-plus-circle"></i> Add New Tax Rule
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/tax_rule') }}">Tax Rules</a></li>
                    <li class="breadcrumb-item active">Add New</li>
                </ol>
            </nav>

            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0"><i class="bi bi-plus-circle"></i> Add New Tax Rule</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/tax_rule/create') }}" method="POST">
                        @csrf
                        
                        <!-- Tax Name Field -->
                        <div class="mb-3">
                            <label for="tax_name" class="form-label">
                                Tax Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" 
                                   class="form-control" 
                                   id="tax_name" 
                                   name="tax_name" 
                                   placeholder="e.g., VAT, Sales Tax, GST" 
                                   required>
                            <small class="text-muted">Enter a descriptive name for this tax rule</small>
                        </div>

                        <!-- Rate Field -->
                        <div class="mb-3">
                            <label for="rate" class="form-label">
                                Tax Rate (%) <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <input type="number" 
                                       class="form-control" 
                                       id="rate" 
                                       name="rate" 
                                       placeholder="0.00"
                                       step="0.01"
                                       min="0"
                                       max="100"
                                       required>
                                <span class="input-group-text">%</span>
                            </div>
                            <small class="text-muted">Enter the tax rate as a percentage (e.g., 12.00 for 12%)</small>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <a href="{{ url('/tax_rule') }}" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-save"></i> Save Tax Rule
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection