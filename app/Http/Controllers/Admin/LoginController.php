<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Enums\RoleEnums;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        if(auth()->attempt($credentials)) {
            $request->session()->regenerate();
            $user = auth()->user();
            if ($user->role === RoleEnums::ADMIN->value) {
                return redirect()->route('admin.dashboard');
            }
        }
        return back()->withErrors(['error' => 'This provided credential do not match our records.']);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.logout');
    }





}
