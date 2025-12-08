<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Management</title>
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
    <div class="container mt-4">
        <!-- Page Header -->
        <div class="row mb-4">
            <div class="col">
                <h2><i class="bi bi-box-seam"></i> Products Management</h2>
                <p class="text-muted">Manage your product inventory</p>
            </div>
            <div class="col text-end">
                <a href="{{ url('/product/add') }}" class="btn btn-success btn-lg">
                    <i class="bi bi-plus-circle"></i> Add New Product
                </a>
            </div>
        </div>

        <!-- Products Table Card -->
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0"><i class="bi bi-table"></i> Products List</h5>
            </div>
            <div class="card-body">
                @if (empty($product_list) || count($product_list) == 0)
                    <div class="alert alert-info text-center" role="alert">
                        <i class="bi bi-info-circle"></i> There are no products in the database yet.
                        <br>
                        <a href="{{ url('/product/add') }}" class="btn btn-primary mt-2">Add Your First Product</a>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Stock Level</th>
                                    <th>Description</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product_list as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>
                                            <strong>{{ $product->product_name }}</strong>
                                        </td>
                                        <td>
                                            <span class="badge bg-success">₱{{ number_format($product->price, 2) }}</span>
                                        </td>
                                        <td>
                                            @if($product->stocklevel > 10)
                                                <span class="badge bg-success">
                                                    <i class="bi bi-check-circle"></i> {{ $product->stocklevel }}
                                                </span>
                                            @elseif($product->stocklevel > 0)
                                                <span class="badge bg-warning text-dark">
                                                    <i class="bi bi-exclamation-triangle"></i> {{ $product->stocklevel }}
                                                </span>
                                            @else
                                                <span class="badge bg-danger">
                                                    <i class="bi bi-x-circle"></i> Out of Stock
                                                </span>
                                            @endif
                                        </td>
                                        <td>{{ Str::limit($product->description, 50) }}</td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <a href="{{ url('/product/'.$product->id.'/edit') }}" class="btn btn-sm btn-warning" title="Edit">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <a href="{{ url('/product/'.$product->id.'/delete') }}" class="btn btn-sm btn-danger" title="Delete">
                                                    <i class="bi bi-trash"></i>
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
    </div>

    <!-- Footer -->
    <footer class="text-center text-muted mt-5 mb-3">
        <p>&copy; 2024 Inventory System. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>