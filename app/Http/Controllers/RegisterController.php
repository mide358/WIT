<?php

namespace App\Http\Controllers;

use App\Http\Enums\RoleEnums;
use App\Http\Requests\StoreUserRequest;
use App\Models\Interest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('frontend.auth.register', ['interests' => Interest::get(), 'role' => RoleEnums::LEARNER->value]);
    }

    public function mentor()
    {
        return view('frontend.auth.register-mentor', ['interests' => Interest::get(), 'role' => RoleEnums::MENTOR->value]);
    }

    public function store(StoreUserRequest $request)
    {
        try{
            $user = User::storeUser($request);

            return redirect()->back()->with('success', 'Account Created Successfully!');
        }catch(\Exception $e){
            return back()->withErrors(['error' => 'Unable to create account']);
        }
    }

}
