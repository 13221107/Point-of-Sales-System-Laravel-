@extends('layouts.master')

@section('title', 'Delete Category')

@section('page-title')
    <i class="bi bi-trash"></i> Delete Category
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/categories') }}">Categories</a></li>
                    <li class="breadcrumb-item active">Delete</li>
                </ol>
            </nav>

            <div class="card shadow border-danger">
                <div class="card-header bg-danger text-white">
                    <h4 class="mb-0"><i class="bi bi-exclamation-triangle"></i> Confirm Deletion</h4>
                </div>
                <div class="card-body text-center">
                    <i class="bi bi-trash text-danger" style="font-size: 4rem;"></i>
                    <h5 class="mt-3">Are you sure you want to delete this category?</h5>
                    
                    <div class="alert alert-light mt-4 text-start">
                        <table class="table table-borderless mb-0">
                            <tr>
                                <th width="40%">ID:</th>
                                <td><strong>{{ $categoryEntry[0]->id }}</strong></td>
                            </tr>
                            <tr>
                                <th>Category Name:</th>
                                <td><strong>{{ $categoryEntry[0]->category_name }}</strong></td>
                            </tr>
                            <tr>
                                <th>Description:</th>
                                <td>{{ $categoryEntry[0]->description ?? 'N/A' }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="alert alert-warning">
                        <i class="bi bi-exclamation-circle"></i> 
                        <strong>Warning:</strong> This action cannot be undone!
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                        <a href="{{ url('/categories') }}" class="btn btn-secondary btn-lg">
                            <i class="bi bi-x-circle"></i> No, Go Back
                        </a>
                        <a href="{{ url('/categories/'.$categoryEntry[0]->id.'/destroy') }}" 
                           class="btn btn-danger btn-lg">
                            <i class="bi bi-trash"></i> Yes, Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection