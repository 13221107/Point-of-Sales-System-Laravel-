@extends('layouts.master')

@section('title', 'Tax Rules Management')

@section('page-title')
    <i class="bi bi-percent"></i> Tax Rules Management
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-0">Manage tax rates and rules for your business</p>
        </div>
        <a href="{{ url('/tax_rule/add') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Add New Tax Rule
        </a>
    </div>

    <div class="card shadow">
        <div class="card-header bg-white">
            <h5 class="mb-0"><i class="bi bi-table"></i> Tax Rules List</h5>
        </div>
        <div class="card-body">
            @if (empty($tax_rule_list) || count($tax_rule_list) == 0)
                <div class="alert alert-info text-center">
                    <i class="bi bi-info-circle"></i> No tax rules available.
                    <br>
                    <a href="{{ url('/tax_rule/add') }}" class="btn btn-primary mt-2">
                        Add Your First Tax Rule
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Tax Name</th>
                                <th>Rate</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tax_rule_list as $tax)
                                <tr>
                                    <td>{{ $tax->id }}</td>
                                    <td><strong>{{ $tax->tax_name }}</strong></td>
                                    <td>
                                        <span class="badge bg-success" style="font-size: 1rem;">
                                            {{ number_format($tax->rate, 2) }}%
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ url('/tax_rule/'.$tax->id.'/edit') }}" 
                                               class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                            <a href="{{ url('/tax_rule/'.$tax->id.'/delete') }}" 
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