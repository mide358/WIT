<?php

namespace App\Http\Controllers;

use App\Http\Enums\AccordionEnums;
use App\Http\Enums\StatusEnums;
use App\Models\Accordion;
use App\Models\Contact;
use App\Models\Country;
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
        $posts = Post::take(3)->get();

        $countries = Country::get();

        return view('index',[
            'coursesCount' => $coursesCount,
            'mentorsCount' => $mentorsCount,
            'learnersCount' => $learnersCount,
            'interestsCount' => $interestsCount,
            'mentors' => $mentors,
            'posts' => $posts,
            'countries' => $countries
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        User::mentor()
            ->where('first_name', 'like', '%' . $query . '%')
            ->get();

    }

    public function faqs()
    {
        $faqs = Accordion::whereType(AccordionEnums::FAQS->value)->get();
        return view('faqs', [ 'faqs' => $faqs ]);
    }

    public function contact()
    {
        return view(' contact');
    }

    public function postContact(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'comments' => 'required'
        ]);
        $contact = Contact::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'comments' => $request->comments,
            'status' => StatusEnums::PROCESSED->value
        ]);
        if($contact){
            return redirect()->back()->with('success', 'Contact Request saved successfully');
        }
        return back()->withErrors(['error' => 'Unable to save contact']);
    }
}
