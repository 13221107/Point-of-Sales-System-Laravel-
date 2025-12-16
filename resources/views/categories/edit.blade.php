@extends('layouts.master')

@section('title', 'Edit Category')

@section('page-title')
    <i class="bi bi-pencil-square"></i> Edit Category
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/categories') }}">Categories</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>

            <div class="card shadow">
                <div class="card-header bg-warning">
                    <h4 class="mb-0"><i class="bi bi-pencil"></i> Edit Category</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/categories/'.$categoryEntry[0]->id.'/update') }}" method="POST">
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
                                   value="{{ $categoryEntry[0]->category_name }}"
                                   required>
                            <small class="text-muted">Enter a unique name for this category</small>
                        </div>

                        <!-- Description Field -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" 
                                      id="description" 
                                      name="description" 
                                      rows="4">{{ $categoryEntry[0]->description }}</textarea>
                            <small class="text-muted">Provide a brief description of this category</small>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ url('/categories') }}" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-warning">
                                <i class="bi bi-save"></i> Update Category
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection