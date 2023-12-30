<?php

namespace App\Http\Controllers;

use App\Http\Enums\StatusEnums;
use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ForumController extends Controller
{
    public function index()
    {
        $forums = Forum::where('parent_id', 0)
            ->with(['children' => function ($query) {
                // Load children for each parent forum
                $query->take(3); // Retrieve only the first five children for each parent forum
            }, 'user'])
            ->latest()
            ->take(5) // Retrieve only the first five parent forums
            ->get();

        // Return the forum data along with children
        return view('frontend.pages.forum', ['forums' => $forums]);
    }

    public function find($id)
    {
        $find = Forum::where('id', $id)->first();
        return response()->json(['data' => $find]);
    }

    public function store(Request $request)
    {
        if(empty($request->description)){
            return response()->json(['status' => 'failed', 'message' => 'You have enter your comment']);
        }
        try {
            Forum::create([
                'description' => $request->description,
                'parent_id' => $request->parent_id,
                'slug' => Str::slug($request->input('description'), "-"),
                'user_id' => auth()->user()->id,
                'status' => StatusEnums::ENABLED->value
            ]);
            return response()->json(['status' => 'success', 'message' => 'Post saved']);
        }catch (\Exception $e){
            return response()->json(['status' => 'failed', 'message' => 'Unable to save post']);
        }
    }
}
