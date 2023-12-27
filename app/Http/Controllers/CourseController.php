<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('mentors', 'faqs', 'curriculum')->paginate(7);
        return view('frontend.pages.courses.index', ['courses' => $courses]);
    }

    public function find($slug)
    {
        $find = Course::whereSlug($slug);
        $course = $find->with('mentors', 'faqs', 'curriculum')->first();
        return view('frontend.pages.courses.find', ['course' => $course]);
    }
}
