<?php

namespace App\Http\Controllers;

use App\Models\Interest;
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
        $mentors = User::with('interests', 'profile')->mentor()->take(4)->get();
        return view('frontend.pages.learners.dashboard',['skip' => $request->get('skip'), 'mentors' => $mentors]);
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
        $learner = auth()->user();
        $connections = $learner->following()->get();
        return view('frontend.pages.learners.dashboard.connections', ['connections' => $connections]);
    }

    public function messages()
    {
        return view('frontend.pages.learners.dashboard.messages');
    }

    public function profile()
    {
        $interests = Interest::enabled()->get();
        $userInterestsIds = User::with('interests:id')->findOrFail(auth()->user()->id)->interests->pluck('id')->toArray();

        return view('frontend.pages.learners.dashboard.profile', ['interests' => $interests, 'userInterests' => $userInterestsIds]);
    }

}
