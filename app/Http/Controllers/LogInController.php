<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogInController extends Controller
{
public function login(Request $request)
{
    // Validate input including role
    $credentials = $request->validate([
        'username' => 'required', 
        'password' => 'required',
        'role' => 'required', // <-- Add role
    ]);

    // Attempt login
    if (Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
        $user = Auth::user();

        // Check if the selected role matches user's role
        if ($user->role !== $credentials['role']) {
            Auth::logout();
            return back()->withErrors(['role' => 'Selected role does not match your account.']);
        }

        // Regenerate session
        $request->session()->regenerate();

        // Redirect to dashboard
        return redirect()->route('dashboard');
    }

    // If login fails
    return back()->withErrors([
        'username' => 'The provided credentials do not match our records.',
    ]);
}

}
