<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System - Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        /* Custom styling for the POS system */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        /* Sidebar styling */
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(180deg, #2c3e50 0%, #34495e 100%);
            color: white;
            position: fixed;
            width: 250px;
            padding-top: 20px;
        }
        
        .sidebar .logo {
            padding: 0 20px 30px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 20px;
        }
        
        .sidebar .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 12px 20px;
            margin: 5px 10px;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .sidebar .nav-link:hover {
            background-color: rgba(255,255,255,0.1);
            color: white;
            transform: translateX(5px);
        }
        
        .sidebar .nav-link.active {
            background-color: #3498db;
            color: white;
        }
        
        .sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
        }
        
        /* Main content area */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        
        /* Header/Navbar styling */
        .top-navbar {
            background-color: white;
            padding: 15px 30px;
            margin: -20px -20px 20px -20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        /* Stats cards */
        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }
        
        .stat-card .icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }
        
        .stat-card.blue .icon { background-color: #e3f2fd; color: #2196f3; }
        .stat-card.green .icon { background-color: #e8f5e9; color: #4caf50; }
        .stat-card.orange .icon { background-color: #fff3e0; color: #ff9800; }
        .stat-card.purple .icon { background-color: #f3e5f5; color: #9c27b0; }
        
        /* Table styling */
        .content-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .table-actions {
            display: flex;
            gap: 5px;
        }
        
        /* Button styling */
        .btn-icon {
            padding: 5px 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    
    <!-- SIDEBAR NAVIGATION -->
    <!-- This is the left sidebar containing all navigation links -->
    <div class="sidebar">
        <div class="logo">
            <h4><i class="bi bi-shop"></i> POS System</h4>
            <small>Point of Sale Management</small>
        </div>
        
        <nav class="nav flex-column">
            <!-- Dashboard link -->
            <a class="nav-link active" href="#dashboard">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            
            <!-- Sales Management dropdown section -->
            <div class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#salesMenu">
                    <i class="bi bi-cart-check"></i> Sales
                    <i class="bi bi-chevron-down float-end"></i>
                </a>
                <div class="collapse" id="salesMenu">
                    <a class="nav-link ps-5" href="#new-sale">New Sale</a>
                    <a class="nav-link ps-5" href="#sales-history">Sales History</a>
                </div>
            </div>
            
            <!-- Products link -->
            <a class="nav-link" href="#products">
                <i class="bi bi-box-seam"></i> Products
            </a>
            
            <!-- Inventory link -->
            <a class="nav-link" href="#inventory">
                <i class="bi bi-boxes"></i> Inventory
            </a>
            
            <!-- Customers link -->
            <a class="nav-link" href="#customers">
                <i class="bi bi-people"></i> Customers
            </a>
            
            <!-- Suppliers link -->
            <a class="nav-link" href="#suppliers">
                <i class="bi bi-truck"></i> Suppliers
            </a>
            
            <!-- Reports dropdown section -->
            <div class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#reportsMenu">
                    <i class="bi bi-graph-up"></i> Reports
                    <i class="bi bi-chevron-down float-end"></i>
                </a>
                <div class="collapse" id="reportsMenu">
                    <a class="nav-link ps-5" href="#daily-report">Daily Report</a>
                    <a class="nav-link ps-5" href="#monthly-report">Monthly Report</a>
                </div>
            </div>
            
            <!-- Settings link -->
            <a class="nav-link" href="#settings">
                <i class="bi bi-gear"></i> Settings
            </a>
        </nav>
    </div>
    
    <!-- MAIN CONTENT AREA -->
    <!-- This is where your page content will be displayed -->
    <div class="main-content">
        
        <!-- TOP NAVIGATION BAR -->
        <!-- Contains search, notifications, and user profile -->
        <div class="top-navbar">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="mb-0">Dashboard</h4>
                    <small class="text-muted">Welcome back to your POS system</small>
                </div>
                <div class="d-flex gap-3 align-items-center">
                    <!-- Search box -->
                    <div class="input-group" style="width: 300px;">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                    
                    <!-- Notifications -->
                    <button class="btn btn-light position-relative">
                        <i class="bi bi-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                    </button>
                    
                    <!-- User profile dropdown -->
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle"></i> Admin
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#profile"><i class="bi bi-person"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#settings"><i class="bi bi-gear"></i> Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#logout"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- STATISTICS CARDS -->
        <!-- Display key metrics at a glance -->
        <div class="row">
            <div class="col-md-3">
                <div class="stat-card blue">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-2">Today's Sales</h6>
                            <h3 class="mb-0">₱12,450</h3>
                            <small class="text-success"><i class="bi bi-arrow-up"></i> 12% from yesterday</small>
                        </div>
                        <div class="icon">
                            <i class="bi bi-cash-stack"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="stat-card green">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-2">Products</h6>
                            <h3 class="mb-0">1,234</h3>
                            <small class="text-muted">Active items</small>
                        </div>
                        <div class="icon">
                            <i class="bi bi-box-seam"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="stat-card orange">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-2">Low Stock Items</h6>
                            <h3 class="mb-0">23</h3>
                            <small class="text-warning"><i class="bi bi-exclamation-circle"></i> Needs attention</small>
                        </div>
                        <div class="icon">
                            <i class="bi bi-exclamation-triangle"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="stat-card purple">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-2">Customers</h6>
                            <h3 class="mb-0">567</h3>
                            <small class="text-muted">Total registered</small>
                        </div>
                        <div class="icon">
                            <i class="bi bi-people"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- EXAMPLE TABLE SECTION -->
        <!-- This shows how to display your CRUD data -->
        <div class="content-card mt-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h5 class="mb-1">Recent Products</h5>
                    <small class="text-muted">Manage your product inventory</small>
                </div>
                <button class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Add New Product
                </button>
            </div>
            
            <!-- Filter and search section -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Search products...">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option>All Categories</option>
                        <option>Electronics</option>
                        <option>Clothing</option>
                        <option>Food</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option>All Status</option>
                        <option>In Stock</option>
                        <option>Low Stock</option>
                        <option>Out of Stock</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-outline-secondary w-100">
                        <i class="bi bi-funnel"></i> Filter
                    </button>
                </div>
            </div>
            
            <!-- Data table -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample data rows - Replace with Laravel Blade foreach loop -->
                        <tr>
                            <td>#001</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="bg-light rounded p-2 me-2">
                                        <i class="bi bi-laptop"></i>
                                    </div>
                                    <span>Laptop Dell XPS 15</span>
                                </div>
                            </td>
                            <td>Electronics</td>
                            <td>₱65,000</td>
                            <td><span class="badge bg-success">50 units</span></td>
                            <td><span class="badge bg-success">In Stock</span></td>
                            <td>
                                <div class="table-actions">
                                    <button class="btn btn-sm btn-info btn-icon" title="View">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning btn-icon" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger btn-icon" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#002</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="bg-light rounded p-2 me-2">
                                        <i class="bi bi-phone"></i>
                                    </div>
                                    <span>iPhone 15 Pro</span>
                                </div>
                            </td>
                            <td>Electronics</td>
                            <td>₱85,000</td>
                            <td><span class="badge bg-warning">8 units</span></td>
                            <td><span class="badge bg-warning">Low Stock</span></td>
                            <td>
                                <div class="table-actions">
                                    <button class="btn btn-sm btn-info btn-icon" title="View">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning btn-icon" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger btn-icon" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#003</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="bg-light rounded p-2 me-2">
                                        <i class="bi bi-headphones"></i>
                                    </div>
                                    <span>Sony WH-1000XM5</span>
                                </div>
                            </td>
                            <td>Electronics</td>
                            <td>₱18,500</td>
                            <td><span class="badge bg-danger">0 units</span></td>
                            <td><span class="badge bg-danger">Out of Stock</span></td>
                            <td>
                                <div class="table-actions">
                                    <button class="btn btn-sm btn-info btn-icon" title="View">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning btn-icon" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger btn-icon" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="text-muted">
                    Showing 1 to 3 of 45 entries
                </div>
                <nav>
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        
    </div>
    
    <!-- Bootstrap 5 JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>