<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Interest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $coursesCount = Course::count();
        $mentorsCount = User::mentor()->count();
        $learnersCount = User::learner()->count();
        $interestsCount = Interest::count();

        $mentors = User::mentor()->get();
        $posts = Post::take(4)->get();

        return view('index',[
            'coursesCount' => $coursesCount,
            'mentorsCount' => $mentorsCount,
            'learnersCount' => $learnersCount,
            'interestsCount' => $interestsCount,
            'mentors' => $mentors,
            'posts' => $posts
        ]);
    }


}
