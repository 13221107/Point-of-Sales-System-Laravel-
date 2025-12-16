<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Check if user is logged in
        if (!auth()->check()) {
            return redirect('/login')->with('error', 'Please login first');
        }
        
        // Convert roles to integers for comparison
        $allowedRoles = array_map('intval', $roles);
        $userRole = auth()->user()->role_id;
        
        // Check if user has required role
        if (!in_array($userRole, $allowedRoles)) {
            return redirect('/dashboard')->with('error', 'Access denied. You do not have permission to access this page.');
        }
        
        return $next($request);
    }
}