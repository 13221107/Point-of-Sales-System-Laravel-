@extends('layout.app')

@section('title', 'Add Category')

@section('content')

<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Add New Category</h5>
    </div>

    <div class="card-body">
        <form action="{{ url('/categories/create') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="category_name" class="form-label">Category Name</label>
                <input 
                    type="text" 
                    name="category_name" 
                    id="category_name" 
                    class="form-control" 
                    placeholder="Enter category name"
                    required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea 
                    name="description" 
                    id="description" 
                    class="form-control" 
                    rows="3"
                    placeholder="Enter category description"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Add Category</button>
            <a href="{{ url('/categories') }}" class="btn btn-secondary ms-2">Go Back</a>
        </form>
    </div>
</div>

@endsection
