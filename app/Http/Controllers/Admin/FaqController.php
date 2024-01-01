<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Enums\StatusEnums;
use App\Models\Accordion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FaqController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.faqs.index',['faqs' => Accordion::paginate(10)]);
    }

    public function create()
    {
        return view('admin.dashboard.faqs.create');
    }

    public function store(Request $request)
    {
        //'name', 'content', 'type', 'status', 'parent_id'];
        try {
            $request->validate([
                'name' => 'required|string|unique:accordions',
                'content' => 'required',
                'type' => 'required',
                'parent_id' => 'sometimes'
            ]);
            $faqs = Accordion::create([
                'name' => $request->name,
                'content' => $request->contents,
                'type' => $request->type,
                'parent_id' => 0,
                'status' => StatusEnums::ENABLED->value,
                'slug' => Str::slug($request->name)
            ]);
            return redirect()->back()->with('success', 'FAQs created');
        }catch(\Exception $e){
            return redirect()->withErrors(['error' => 'Unable to create faq']);
        }
    }

    public function edit($id){
        return view('admin.dashboard.faqs.edit', ['skill' => Accordion::whereId($id)->first()]);
    }


    public function update(Request $request, $id)
    {
        try {
            $find = Accordion::find($id);
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
