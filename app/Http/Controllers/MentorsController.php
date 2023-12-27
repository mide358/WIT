<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MentorsController extends Controller
{
    public function index()
    {
        $mentors = User::with('interests', 'profile')->mentor();
        $paginate = $mentors->paginate(5);
        return view('frontend.pages.mentors.index', ['mentors' => $paginate, 'count' => $mentors->count()]);
    }

    public function find($slug)
    {
        $find = User::whereSlug($slug)->first();
        $suggestions = User::recommendMentors($find->id)->random(4);

        $mentor = User::whereSlug($slug)->with('profile', 'interests', 'posts')->first();
        return view('frontend.pages.mentors.find', ['mentor' => $mentor, 'suggestions' => $suggestions]);
    }

    public function dashboard()
    {
        return view('frontend.pages.mentors.dashboard.index');
    }
}
