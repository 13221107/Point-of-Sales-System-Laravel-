<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>
    @extends('layout.app')

@section('content')

<style>
    .page-title {
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .table-card {
        background: #fff;
        padding: 20px;
        border-radius: 6px;
        box-shadow: 0px 2px 6px rgba(0,0,0,0.1);
    }

    .table th {
        background: #f5f5f5;
        font-weight: bold;
    }

    .btn-sm {
        padding: 3px 8px;
        font-size: 12px;
    }
</style>

<div class="page-title">Category List</div>

<a href="{{ url('/categories/add') }}" class="btn btn-primary mb-3">
    + Add New Category
</a>

<div class="table-card">

    @if ($categoryList->isEmpty())
        <p>No categories found.</p>
    @else
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="width: 40px;">#</th>
                    <th>Category Name</th>
                    <th>Description</th>
                    <th style="width: 150px;">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categoryList as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->category_name }}</td>
                        <td>{{ $cat->description }}</td>
                        <td>
                            <a href="{{ url('/categories/' . $cat->id . '/edit') }}" 
                               class="btn btn-warning btn-sm">Edit</a>

                            <a href="{{ url('/categories/' . $cat->id . '/delete') }}" 
                               class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</div>

@endsection


</body>
</html>