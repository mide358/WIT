<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Enums\StatusEnums;
use App\Models\Interest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SkillsController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.interests.index',['skills' => Interest::get()]);
    }

    public function create()
    {
        return view('admin.dashboard.interests.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|unique:interests'
            ]);
            $interest = Interest::create([
                'name' => $request->name,
                'status' => StatusEnums::ENABLED->value,
                'slug' => Str::slug($request->name)
            ]);
            return redirect()->back()->with('success', 'Skills created');
        }catch(\Exception $e){
            return redirect()->withErrors(['error' => 'Unable to create skills']);
        }
    }

    public function edit($id){
        return view('admin.dashboard.interests.edit', ['skill' => Interest::whereId($id)->first()]);
    }


    public function update(Request $request, $id)
    {
        try {
            $find = Interest::find($id);
            if ($find) {
                $find->update([
                    'name' => $request->name,
                    'status' => $request->status,
                ]);
            }
            return redirect()->back()->with('success', 'Skills updated');
        }catch (\Exception $e){
            return redirect()->withErrors(['error' => 'Unable to update skills']);
        }
    }

}
