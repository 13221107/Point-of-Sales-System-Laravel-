<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category Delete</title>
</head>
<body>

    @extends('layout.app')

    @section('title', 'Delete Category')

    @section('content')

    <div class="card shadow-sm">
        <div class="card-header bg-danger text-white">
            <h5 class="mb-0">Confirm Delete</h5>
        </div>

        <div class="card-body">

            <p class="fs-5">
                Are you sure you want to delete the category 
                <strong>"{{ $categoryEntry[0]->category_name }}"</strong>?
            </p>

            <div class="mt-3">
                <a href="{{ url('/categories/' . $categoryEntry[0]->id . '/destroy') }}" 
                class="btn btn-danger">
                    Yes, Delete
                </a>

                <a href="{{ url('/categories') }}" 
                class="btn btn-secondary ms-2">
                    No, Go Back
                </a>
            </div>

        </div>
    </div>

    @endsection

</body>
</html>