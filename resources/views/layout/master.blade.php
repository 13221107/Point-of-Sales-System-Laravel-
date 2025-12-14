<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        /* Make sidebar fixed and full height */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 250px;
            background: #2c3e50;
            color: white;
            overflow-y: auto;
            z-index: 1000;
        }
        
        /* Push main content to the right */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            min-height: 100vh;
            background: #f8f9fa;
        }
        
        /* Sidebar links styling */
        .sidebar a {
            color: #ecf0f1;
            text-decoration: none;
            padding: 15px 20px;
            display: block;
            transition: all 0.3s;
        }
        
        .sidebar a:hover {
            background: #34495e;
            padding-left: 30px;
        }
        
        .sidebar a.active {
            background: #3498db;
            border-left: 4px solid #2980b9;
        }
        
        /* Sidebar brand/logo */
        .sidebar-brand {
            padding: 20px;
            background: #1a252f;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
        }
        
        /* Mobile responsive - hide sidebar on small screens */
        @media (max-width: 768px) {
            .sidebar {
                left: -250px;
                transition: left 0.3s;
            }
            
            .sidebar.show {
                left: 0;
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .mobile-toggle {
                display: block !important;
            }
        }
        
        .mobile-toggle {
            display: none;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <!-- Brand/Logo -->
        <div class="sidebar-brand">
            <i class="bi bi-calculator"></i> D Point of Sales System
        </div>
        
        <!-- Navigation Menu -->
        <nav class="mt-3">
            <a href="{{ url('/dashboard') }}" class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            
            <a href="{{ url('/user') }}" class="{{ Request::is('user*') ? 'active' : '' }}">
                <i class="bi bi-person"></i> Users

            <a href="{{ url('/product') }}" class="{{ Request::is('product*') ? 'active' : '' }}">
                <i class="bi bi-box-seam"></i> Products
            </a>
            
            <a href="{{ url('/transaction') }}" class="{{ Request::is('Transaction*') ? 'active' : '' }}">
                <i class="bi bi-receipt"></i> Transaction
            </a>

            <a href="{{ url('/report') }}" class="{{ Request::is('report*') ? 'active' : '' }}">
                <i class="bi bi-file-earmark-bar-graph"></i> Reports
            </a>

            <a href="{{ url('/category') }}" class="{{ Request::is('category*') ? 'active' : '' }}">
                <i class="bi bi-tags"></i> Categories
            </a>
            
            <a href="{{ url('/supplier') }}" class="{{ Request::is('supplier*') ? 'active' : '' }}">
                <i class="bi bi-truck"></i> Suppliers
            </a>
            
            <a href="{{ url('/customer') }}" class="{{ Request::is('customer*') ? 'active' : '' }}">
                <i class="bi bi-people"></i> Customers
            </a>
            
            <a href="{{ url('/order') }}" class="{{ Request::is('order*') ? 'active' : '' }}">
                <i class="bi bi-cart"></i> Orders
            </a>
            
            <a href="{{ url('/inventory') }}" class="{{ Request::is('inventory*') ? 'active' : '' }}">
                <i class="bi bi-clipboard-data"></i> Inventory
            </a>
            
            
            
            <hr style="border-color: #34495e;">
            
            <a href="{{ url('/settings') }}" class="{{ Request::is('settings*') ? 'active' : '' }}">
                <i class="bi bi-gear"></i> Settings
            </a>
            
            <a href="{{ url('/logout') }}">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </nav>
    </div>

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Top Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <!-- Mobile Menu Toggle -->
            <button class="btn btn-primary mobile-toggle" onclick="toggleSidebar()">
                <i class="bi bi-list"></i>
            </button>
            
            <h2>@yield('page-title', 'Dashboard')</h2>
            
            <!-- User Info -->
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle"></i> Admin
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                </ul>
            </div>
        </div>

        <!-- Page Content (This is where your pages will load) -->
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Toggle sidebar on mobile
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('show');
        }
        
        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            var sidebar = document.getElementById('sidebar');
            var toggle = document.querySelector('.mobile-toggle');
            
            if (window.innerWidth <= 768) {
                if (!sidebar.contains(event.target) && !toggle.contains(event.target)) {
                    sidebar.classList.remove('show');
                }
            }
        });
    </script>
    
    @yield('scripts')
</body>
</html>