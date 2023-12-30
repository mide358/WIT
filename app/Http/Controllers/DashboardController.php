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
            return redirect()->route('frontend.mentors.dashboard.index');
        }else if($user->isLearner()){
            if($user->skpReview === false){
                return redirect()->route('frontend.learners.suggestions');
            }
            return redirect()->route('frontend.learners.dashboard.index');
        }
    }


}
