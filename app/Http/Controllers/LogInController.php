<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLogin() {
        return view('login/showlogin');
    }
    public function login(Request $request) {
        // Validate input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role_id' => 'required'
        ]);
        
        // Find user with matching username and role_id
        $user = User::where('username', $request->username)
                    ->where('role_id', $request->role_id)
                    ->first();
        
        // Check if user exists and password matches
        if ($user && Hash::check($request->password, $user->password)) {
            // ✅ Log the user in
            Auth::login($user);
            
            // ✅ ADD THIS LINE: Store role_id in session
            session(['role_id' => $user->role_id]);
            
            // Update last login
            $user->last_login = now();
            $user->save();
            
            return redirect('/dashboard');
        }
        
        // If authentication fails
        return back()->with('error', 'Invalid username, password, or role');
    }
    
    public function logout() {
    session()->forget('role_id'); 
    Auth::logout();
    return redirect('/login');
}
}