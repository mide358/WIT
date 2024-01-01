<?php

namespace App\Http\Controllers;

use App\Http\Enums\SecretQuestionEnums;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordResetController extends Controller
{
    public function index()
    {
        return view('frontend.auth.forgot-password', ['questions' => SecretQuestionEnums::cases()]);
    }

    public function store(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'No user found with this email address']);
        }

        if (!$user->secret_question || !$user->secret_answer) {
            return redirect()->back()->withErrors(['error' => 'User did not set up secret question or answer']);
        }

        // Check if the provided secret question matches the one set by the user
        if ($user->secret_question !== $request->secret_question) {
            return redirect()->back()->withErrors(['error' => 'Invalid secret question/answer']);
        }

        // Check if the provided secret answer matches the one set by the user
        if (!Hash::check($request->secret_answer, $user->secret_answer)) {
            return redirect()->back()->withErrors(['error' => 'Incorrect secret answer']);
        }

        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
            'secret_question' => ['required'],
            'secret_answer' => ['required'],
        ]);

        $update = $user->update([
           'password' => Hash::make($request->password)
        ]);

        if($update){
            return redirect()->back()->with(['success' => 'Password Updated Successfully. Please login again']);
        }else{
            return redirect()->back()->withErrors(['error' => 'Unable to change password']);
        }
    }
}
