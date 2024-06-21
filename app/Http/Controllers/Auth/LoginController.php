<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(Request $request, $role)
    {
        return view('auth.login', ['role' => $role]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === $request->role) {
                return redirect()->intended('/home');
            } else {
                Auth::logout();
                return redirect()->back()->withErrors(['error' => 'Invalid role.']);
            }
        }

        return redirect()->back()->withErrors(['error' => 'Invalid credentials.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
