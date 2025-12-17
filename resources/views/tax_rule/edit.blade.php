@extends('layouts.master')

@section('title', 'Edit Tax Rule')

@section('page-title')
    <i class="bi bi-pencil-square"></i> Edit Tax Rule
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/tax_rule') }}">Tax Rules</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>

            <div class="card shadow">
                <div class="card-header bg-warning">
                    <h4 class="mb-0"><i class="bi bi-pencil"></i> Edit Tax Rule</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/tax_rule/'.$tax_rule_entry[0]->id.'/update') }}" method="POST">
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
                                   value="{{ $tax_rule_entry[0]->tax_name }}"
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
                                       value="{{ $tax_rule_entry[0]->rate }}"
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
                            <button type="submit" class="btn btn-warning">
                                <i class="bi bi-save"></i> Update Tax Rule
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection