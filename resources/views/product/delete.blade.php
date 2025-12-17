@extends('layouts.master')

@section('title', 'Delete Product')

@section('page-title', 'Delete Product')

@section('content')
        <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Product</title>
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
                <div class="col-md-6">
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/product') }}">Products</a></li>
                            <li class="breadcrumb-item active">Delete Product</li>
                        </ol>
                    </nav>

                    <!-- Delete Confirmation Card -->
                    <div class="card shadow border-danger">
                        <div class="card-header bg-danger text-white">
                            <h4 class="mb-0"><i class="bi bi-exclamation-triangle"></i> Confirm Deletion</h4>
                        </div>
                        <div class="card-body text-center">
                            <i class="bi bi-trash text-danger" style="font-size: 4rem;"></i>
                            <h5 class="mt-3">Are you sure you want to delete this product?</h5>
                            
                            <!-- Product Details -->
                            <div class="alert alert-light mt-4 text-start">
                                <table class="table table-borderless mb-0">
                                    <tr>
                                        <th width="40%">Product Name:</th>
                                        <td><strong>{{ $product_entry[0]->product_name }}</strong></td>
                                    </tr>
                                    <tr>
                                        <th>Price:</th>
                                        <td>₱{{ number_format($product_entry[0]->price, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Stock Level:</th>
                                        <td>{{ $product_entry[0]->stocklevel }}</td>
                                    </tr>
                                    <tr>
                                        <th>Description:</th>
                                        <td>{{ $product_entry[0]->description }}</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="alert alert-warning" role="alert">
                                <i class="bi bi-exclamation-circle"></i> 
                                <strong>Warning:</strong> This action cannot be undone!
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                                <a href="{{ url('/product') }}" class="btn btn-secondary btn-lg">
                                    <i class="bi bi-x-circle"></i> No, Go Back
                                </a>
                                <a href="{{ url('/product/'.$product_entry[0]->id.'/destroy') }}" class="btn btn-danger btn-lg">
                                    <i class="bi bi-trash"></i> Yes, Delete Product
                                </a>
                            </div>
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
