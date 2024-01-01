<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Follow;
use App\Models\Interest;
use App\Models\User;
use Illuminate\Http\Request;

class MentorsController extends Controller
{
    public function index()
    {
        $query = request()->input('query');
        $mentors = User::with('interests', 'profile')->mentor();
        if($query){
            $query = 'jsdn';
            $mentors->where('name', 'like', '%' . $query . '%')->get();
        }
        $count = $mentors->count();
        $mentors = $mentors->paginate(5);

        $countries = Country::enabled()->get();
        $skills = Interest::enabled()->get();

        return view('frontend.pages.mentors.index', [
            'mentors' => $mentors,
            'query' => request()->input('query'),
            'count' => $count,
            'countries' => $countries,
            'skills' => $skills
        ]);
    }

    public function find($slug)
    {
        $find = User::whereSlug($slug)->first();
        $suggestions = User::recommendMentors($find->id)->random(4);

        $mentor = User::whereSlug($slug)->with('profile', 'interests', 'posts')->first();
        $following = Follow::where(['learner_id' => auth()->user()->id, 'mentor_id' => $find->id])->first();
        return view('frontend.pages.mentors.find', ['mentor' => $mentor, 'suggestions' => $suggestions, 'following' => $following]);
    }

    public function dashboard()
    {
        if(auth()->user()->isLearner()){
            return view('frontend.404');
        }
        return view('frontend.pages.mentors.dashboard');
    }

    public function connect(Request $request)
    {
        $user = User::where('slug', $request->slug)->first();
        if($request->isAccepted > 0){
            $find = Follow::find($request->isAccepted);
            if(auth()->user()->id === $find->learner_id) {
                $delete = $find->delete();
                if ($delete) {
                    return redirect()->back()->with('success', 'Disonnected...');
                }
                return back()->withErrors(['error' => 'Unable to disconnect']);
            }
        }else {

            $follow = Follow::create([
                'learner_id' => auth()->user()->id,
                'mentor_id' => $user->id,
            ]);
            if ($follow) {
                return redirect()->back()->with('success', 'Connected...');
            }
            return back()->withErrors(['error' => 'Unable to connect']);
        }
    }

    public function connections()
    {
        if(auth()->user()->isLearner()){
            return redirect()->route('404');
        }
        return view('frontend.pages.mentors.dashboard.connections', ['connections' => auth()->user()->followers()->get()]);
    }
}
