<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if($user->isMentor()){
            return redirect()->intended('frontend.mentors.dashboard.index');
        }else if($user->isLearner()){
            if($user->skpReview === false){
                return redirect()->intended('frontend.learners.suggestions');
            }
            return redirect()->intended('frontend.mentors.dashboard.index');
        }
    }


}
