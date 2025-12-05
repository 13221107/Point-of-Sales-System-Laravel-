<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    @extends('layout.app')

@section('title', 'Edit Category')

@section('content')

<div class="card shadow-sm">
    <div class="card-header bg-warning">
        <h5 class="mb-0">Edit Category</h5>
    </div>

    <div class="card-body">

        <form action="{{ url('/categories/' . $categoryEntry[0]->id . '/update') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="category_name" class="form-label">Category Name</label>
                <input 
                    type="text" 
                    name="category_name"
                    id="category_name"
                    class="form-control"
                    value="{{ $categoryEntry[0]->category_name }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea 
                    name="description" 
                    id="description" 
                    rows="3"
                    class="form-control">{{ $categoryEntry[0]->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Category</button>
            <a href="{{ url('/categories') }}" class="btn btn-secondary ms-2">Cancel</a>
        </form>

    </div>
</div>

@endsection

</body>
</html>