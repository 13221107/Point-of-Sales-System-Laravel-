@extends('layouts.master')

@section('title', 'Categories Management')

@section('page-title')
    <i class="bi bi-tags"></i> Categories Management
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-0">Manage your product categories</p>
        </div>
        <a href="{{ url('/categories/add') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Add New Category
        </a>
    </div>

    <div class="card shadow">
        <div class="card-header bg-white">
            <h5 class="mb-0"><i class="bi bi-table"></i> Categories List</h5>
        </div>
        <div class="card-body">
            @if ($categoryList->isEmpty())
                <div class="alert alert-info text-center">
                    <i class="bi bi-info-circle"></i> No categories available.
                    <br>
                    <a href="{{ url('/categories/add') }}" class="btn btn-primary mt-2">
                        Add Your First Category
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Description</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categoryList as $cat)
                                <tr>
                                    <td>{{ $cat->id }}</td>
                                    <td><strong>{{ $cat->category_name }}</strong></td>
                                    <td>{{ $cat->description ?? 'N/A' }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ url('/categories/'.$cat->id.'/edit') }}" 
                                               class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                            <a href="{{ url('/categories/'.$cat->id.'/delete') }}" 
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