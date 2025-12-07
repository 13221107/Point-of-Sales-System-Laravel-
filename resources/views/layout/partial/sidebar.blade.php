<div class="sidebar">
    <div class="logo">
        <h4><i class="bi bi-shop"></i> POS System</h4>
    </div>
    <nav class="nav flex-column">
        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>
        <a class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}" href="{{ route('products.index') }}">
            <i class="bi bi-box-seam"></i> Products
        </a>
        <!-- Add more menu items based on your tables -->
    </nav>
</div>