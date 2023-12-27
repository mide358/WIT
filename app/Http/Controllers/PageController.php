<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function mentor()
    {
        return view('frontend.pages.all-mentors');
    }

    public function findMentor()
    {
        return view('frontend.pages.find-mentors');
    }

    public function profile($slug)
    {
        $recommended = User::recommendMentors();
        $suggestions = $recommended->shuffle()->take(4);
        $randomPosts = Post::get()->random(3);
        $user = User::with('profile', 'interests', 'posts')->where('slug', $slug)->first();
        return view('frontend.pages.profile', ['user' => $user, 'suggestions' => $suggestions, 'randomPosts' => $randomPosts]);
    }

}
