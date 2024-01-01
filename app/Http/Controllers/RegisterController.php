<?php

namespace App\Http\Controllers;

use App\Http\Enums\RoleEnums;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Country;
use App\Models\Interest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('frontend.auth.register', ['interests' => Interest::get(), 'role' => RoleEnums::LEARNER->value]);
    }

    public function mentor()
    {
        return view('frontend.auth.register-mentor', ['interests' => Interest::get(), 'role' => RoleEnums::MENTOR->value, 'countries' => Country::enabled()->get()]);
    }

    public function store(StoreUserRequest $request)
    {
        try{
            $user = User::storeUser($request);

            if($user) {
                return redirect()->back()->with('success', 'Account Created Successfully!');
            }
        }catch(\Exception $e){
            return back()->withErrors(['error' => 'Unable to create account']);
        }
    }

    public function update(UpdateUserRequest $request)
    {
        try {
            $user = auth()->user();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->phone_number = $request->phone_number;
            if (!empty($request->password)) {
                $user->password = Hash::make($request->password);
            }
            $user->save();

            $interests = $request->interests;
            $user->interests()->sync($interests);
            if (auth()->user()->isMentor()) {
                $user->profile()->update([
                    'company' => $request->company,
                    'job_title' => $request->job_title,
                    'country_id' => $request->country_id,
                    'category_id' => 2,
                    'bio' => $request->bio,
                    'linkedin' => $request->linkedin,
                    'twitter' => ($request->twitter) ?? null,
                ]);
            }
            return redirect()->back()->with('success', 'Profile updated successfully');
        }catch(Exception $e){
            return back()->withErrors(['error' => 'Unable to update profile']);
        }
    }

}
