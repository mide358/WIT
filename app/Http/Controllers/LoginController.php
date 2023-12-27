<?php

namespace App\Http\Controllers;

use App\Http\Enums\RoleEnums;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        if(auth()->attempt($credentials))
        {
            $request->session()->regenerate();
            $user = auth()->user();
            if($user->role === RoleEnums::LEARNER->value){
                if(!$user->skpReview){
                    return redirect()->route('frontend.learners.suggestions');
                }
                return redirect()->route('frontend.learners.dashboard.index');
            }else {
                return redirect()->route('frontend.mentors.dashboard.index');
            }
        }
        return back()->withErrors(['error' => 'This provided credential do not match our records.']);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login.get');
    }





}
