    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - POS System</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
        
        <style>
            body {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            .login-container {
                max-width: 450px;
                width: 100%;
            }
            
            .login-card {
                border-radius: 15px;
                box-shadow: 0 10px 40px rgba(0,0,0,0.3);
            }
            
            .login-header {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                color: white;
                padding: 30px;
                border-radius: 15px 15px 0 0;
                text-align: center;
            }
            
            .login-body {
                padding: 40px;
                background: white;
                border-radius: 0 0 15px 15px;
            }
            
            .role-badge {
                cursor: pointer;
                transition: all 0.3s;
                padding: 15px;
                margin: 10px 0;
                border: 2px solid #dee2e6;
                border-radius: 10px;
            }
            
            .role-badge:hover {
                transform: translateY(-3px);
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                border-color: #667eea;
            }
            
            .role-badge.selected {
                border-color: #667eea;
                background: #f0f4ff;
                box-shadow: 0 5px 15px rgba(102, 126, 234, 0.2);
            }
            
            .role-icon {
                font-size: 2rem;
                margin-bottom: 5px;
            }
            
            .login-form {
                display: none;
            }
            
            .login-form.show {
                display: block;
                animation: fadeIn 0.3s;
            }
            
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(10px); }
                to { opacity: 1; transform: translateY(0); }
            }
            
            .selected-role-display {
                display: none;
                padding: 15px;
                background: #f0f4ff;
                border-radius: 10px;
                margin-bottom: 20px;
                border-left: 4px solid #667eea;
            }
            
            .selected-role-display.show {
                display: block;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <div class="login-card">
                <!-- Header -->
                <div class="login-header">
                    <i class="bi bi-calculator" style="font-size: 3rem;"></i>
                    <h2 class="mt-3 mb-0">Point of Sales System</h2>
                    <p class="mb-0">Sign in to your account</p>
                </div>
                
                <!-- Login Body -->
                <div class="login-body">  
                    <!-- Error Message -->
                    @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show">
                        <i class="bi bi-exclamation-circle"></i> {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif
                    
                    <!-- STEP 1: Role Selection -->
                    <div id="roleSelection">
                        <input type="hidden" id="selected_role_id">
                        
                            <div class="role-badge" data-role="1" data-role-name="Cashier" data-role-color="warning">
                                <div class="d-flex align-items-center">
                                    <div class="role-icon text-warning">
                                        <i class="bi bi-cash-coin"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-0">Cashier</h5>
                                    </div>
                                    <div>
                                        <i class="bi bi-check-circle-fill text-success" style="font-size: 1.5rem; display: none;"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Inventory Staff = role_id 2 -->
                            <div class="role-badge" data-role="2" data-role-name="Inventory Staff" data-role-color="success">
                                <div class="d-flex align-items-center">
                                    <div class="role-icon text-success">
                                        <i class="bi bi-box-seam"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-0">Inventory Staff</h5>
                                    </div>
                                    <div>
                                        <i class="bi bi-check-circle-fill text-success" style="font-size: 1.5rem; display: none;"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Manager = role_id 3 -->
                            <div class="role-badge" data-role="3" data-role-name="Manager" data-role-color="primary">
                                <div class="d-flex align-items-center">
                                    <div class="role-icon text-primary">
                                        <i class="bi bi-briefcase"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-0">Manager</h5>
                                    </div>
                                    <div>
                                        <i class="bi bi-check-circle-fill text-success" style="font-size: 1.5rem; display: none;"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Admin = role_id 4 -->
                            <div class="role-badge" data-role="4" data-role-name="Admin" data-role-color="danger">
                                <div class="d-flex align-items-center">
                                    <div class="role-icon text-danger">
                                        <i class="bi bi-shield-fill-check"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-0">Admin</h5>
                                    </div>
                                    <div>
                                        <i class="bi bi-check-circle-fill text-success" style="font-size: 1.5rem; display: none;"></i>
                                    </div>
                                </div>
                            </div> 
                        </div>
                
    <div class="login-form" id="loginFormSection">
                        <!-- Selected Role Display -->
                        <div class="selected-role-display" id="selectedRoleDisplay">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <small class="text-muted">Logging in as:</small>
                                    <h5 class="mb-0" id="displayRoleName">
                                        <span id="displayRoleBadge"></span>
                                    </h5>
                                </div>
                                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="changeRole()">
                                    <i class="bi bi-arrow-left"></i> Change
                                </button>
                            </div>
                        </div>
                        
                        <h5 class="text-center mb-3">Enter Credentials</h5>
                        
                        <form action="{{ url('/login') }}" method="POST" id="loginForm">
                            @csrf
                            <input type="hidden" name="role_id" id="role_id_input">
                            
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="username" class="form-label">
                                    <i class="bi bi-person"></i> Username
                                </label>
                                <input type="text" 
                                    class="form-control form-control-lg" 
                                    id="username" 
                                    name="username" 
                                    placeholder="Enter your username" 
                                    required
                                    autofocus>
                            </div>
                            
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">
                                    <i class="bi bi-lock"></i> Password
                                </label>
                                <input type="password" 
                                    class="form-control form-control-lg" 
                                    id="password" 
                                    name="password" 
                                    placeholder="Enter your password" 
                                    required>
                            </div>
                            
                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="bi bi-box-arrow-in-right"></i> Sign In
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            
            <p class="text-center text-white mt-3">
                <small>&copy; 2025 Point of Sales System. All rights reserved.</small>
            </p>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        
        <script>
            let selectedRole = null;
            let selectedRoleName = '';
            let selectedRoleColor = '';
            
            // Role selection
            document.querySelectorAll('.role-badge').forEach(badge => {
                badge.addEventListener('click', function() {
                    selectedRole = this.getAttribute('data-role');
                    selectedRoleName = this.getAttribute('data-role-name');
                    selectedRoleColor = this.getAttribute('data-role-color');
                    
                    // Remove selected class and hide checkmarks from all
                    document.querySelectorAll('.role-badge').forEach(b => {
                        b.classList.remove('selected');
                        b.querySelector('.bi-check-circle-fill').style.display = 'none';
                    });
                    
                    // Add selected class and show checkmark to clicked
                    this.classList.add('selected');
                    this.querySelector('.bi-check-circle-fill').style.display = 'block';
                    
                    // Wait a moment for visual feedback, then proceed
                    setTimeout(() => {
                        proceedToLogin();
                    }, 300);
                });
            });
            
            function proceedToLogin() {
                // Hide role selection
                document.getElementById('roleSelection').style.display = 'none';
                
                // Show login form
                document.getElementById('loginFormSection').classList.add('show');
                
                // Update selected role display
                document.getElementById('selectedRoleDisplay').classList.add('show');
                document.getElementById('displayRoleBadge').innerHTML = 
                    `<span class="badge bg-${selectedRoleColor}">${selectedRoleName}</span>`;
                
                // Set hidden input
                document.getElementById('role_id_input').value = selectedRole;
                document.getElementById('selected_role_id').value = selectedRole;
                
                // Focus on username field
                document.getElementById('username').focus();
            }
            
            function changeRole() {
                // Show role selection again
                document.getElementById('roleSelection').style.display = 'block';
                
                // Hide login form
                document.getElementById('loginFormSection').classList.remove('show');
                document.getElementById('selectedRoleDisplay').classList.remove('show');
            
                // Clear form
                document.getElementById('loginForm').reset();
            }
        </script>
    </body>
    </html>