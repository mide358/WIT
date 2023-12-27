<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LearnersController extends Controller
{
    public function index()
    {
        return view('frontend.pages.learners.suggestions');
    }

    public function dashboard(Request $request)
    {
        if(!$request->get('skip')){
            $user = auth()->user();
            $user->update(['skpReview' => true]);
        }
        return view('frontend.pages.learners.dashboard',['skip' => $request->get('skip')]);
    }

    public function suggestions()
    {

        $user = User::find(23)->first();
        $interests = User::find(23)->with('interests')->first();
        //$user = auth()->user();
        $recommendMentors = User::recommendMentors($user->id);
        return view('frontend.pages.learners.suggestions', ['mentors' => $recommendMentors->random(8), 'count' => $recommendMentors->count(), 'user_interests' => $interests]);
    }

    public function connections()
    {
        return view('frontend.pages.learners.dashboard.connections');
        $learner = User::whereSlug($slug)->first();
        if ($learner) {
            $followers = $learner->followers()->get();
        }
    }

    public function messages()
    {
        return view('frontend.pages.learners.dashboard.messages');

    }

    public function profile()
    {
        return view('frontend.pages.learners.dashboard.profile');
    }

}
