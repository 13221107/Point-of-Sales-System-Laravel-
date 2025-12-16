@extends('layouts.master')

@section('title', 'Add Category')

@section('page-title')
    <i class="bi bi-plus-circle"></i> Add New Category
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/categories') }}">Categories</a></li>
                    <li class="breadcrumb-item active">Add New</li>
                </ol>
            </nav>

            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0"><i class="bi bi-plus-circle"></i> Add New Category</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/categories/create') }}" method="POST">
                        @csrf
                        
                        <!-- Category Name Field -->
                        <div class="mb-3">
                            <label for="category_name" class="form-label">
                                Category Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" 
                                   class="form-control" 
                                   id="category_name" 
                                   name="category_name" 
                                   placeholder="Enter category name" 
                                   required>
                            <small class="text-muted">Enter a unique name for this category</small>
                        </div>

                        <!-- Description Field -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" 
                                      id="description" 
                                      name="description" 
                                      rows="4"
                                      placeholder="Enter category description (optional)"></textarea>
                            <small class="text-muted">Provide a brief description of this category</small>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ url('/categories') }}" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-save"></i> Save Category
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection