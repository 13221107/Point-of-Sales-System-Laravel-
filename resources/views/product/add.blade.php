{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
</head>
<body>
    <h3>Add New Product</h3> 
    <form action="{{ url('/product/create') }}" method="post">
        @csrf
        Product Name
        <input type="text" name="product_name" id="">
        <br>
        Price
        <input type="number" name="price" id="">
        <br>
        Description
        <input type="text" name="description" id="">
        <br>
        Stocklevel
        <input type="number" name="stocklevel" id="">
        <br>
        <button type="submit">Add New Product</button>
    </form>
    <br>
    <a href="{{url('/product')}}">Go Back</a> 
</body>
</html> --}}
@extends('layouts.master')

@section('title', 'Add Product')

@section('page-title', 'Add New Product')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Product</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    </head>
    <body class="bg-light">
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <i class="bi bi-shop"></i> Inventory System
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/product') }}">
                                <i class="bi bi-box-seam"></i> Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-cart"></i> Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-people"></i> Customers
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/product') }}">Products</a></li>
                            <li class="breadcrumb-item active">Add New Product</li>
                        </ol>
                    </nav>

                    <!-- Form Card -->
                    <div class="card shadow">
                        <div class="card-header bg-success text-white">
                            <h4 class="mb-0"><i class="bi bi-plus-circle"></i> Add New Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/product/create') }}" method="POST">
                                @csrf
                                
                                <!-- Product Name -->
                                <div class="mb-3">
                                    <label for="product_name" class="form-label">
                                        Product Name <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" 
                                        class="form-control" 
                                        id="product_name" 
                                        name="product_name" 
                                        placeholder="Enter product name" 
                                        required>
                                </div>

                                <!-- Price -->
                                <div class="mb-3">
                                    <label for="price" class="form-label">
                                        Price (₱) <span class="text-danger">*</span>
                                    </label>
                                    <input type="number" 
                                        class="form-control" 
                                        id="price" 
                                        name="price" 
                                        placeholder="0.00" 
                                        step="0.01" 
                                        min="0"
                                        required>
                                </div>

                                <!-- Stock Level -->
                                <div class="mb-3">
                                    <label for="stocklevel" class="form-label">
                                        Stock Level <span class="text-danger">*</span>
                                    </label>
                                    <input type="number" 
                                        class="form-control" 
                                        id="stocklevel" 
                                        name="stocklevel" 
                                        placeholder="0" 
                                        min="0"
                                        required>
                                </div>

                                <!-- Description -->
                                <div class="mb-3">
                                    <label for="description" class="form-label">
                                        Description
                                    </label>
                                    <textarea class="form-control" 
                                            id="description" 
                                            name="description" 
                                            rows="4" 
                                            placeholder="Enter product description"></textarea>
                                </div>

                                <!-- Buttons -->
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="{{ url('/product') }}" class="btn btn-secondary">
                                        <i class="bi bi-x-circle"></i> Cancel
                                    </a>
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-save"></i> Save Product
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
@endsection