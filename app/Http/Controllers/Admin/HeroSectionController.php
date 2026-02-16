<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    public function index()
    {
        $heroes = HeroSection::latest()->paginate(10);
        return view('admin.heroes.index', compact('heroes'));
    }

    public function create()
    {
        return view('admin.heroes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'background_image' => 'nullable|image',
        ]);

        $data = $request->all();

        if ($request->hasFile('background_image')) {
            $data['background_image'] = $request->file('background_image')
                ->store('heroes','public');
        }

        HeroSection::create($data);

        return redirect()->route('hero-sections.index')
            ->with('success','Hero Section Created Successfully');
    }

    public function edit(HeroSection $hero_section)
    {
        return view('admin.heroes.edit', compact('hero_section'));
    }

    public function update(Request $request, HeroSection $hero_section)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('background_image')) {
            $data['background_image'] = $request->file('background_image')
                ->store('heroes','public');
        }

        $hero_section->update($data);

        return redirect()->route('hero-sections.index')
            ->with('success','Hero Updated Successfully');
    }

    public function destroy(HeroSection $hero_section)
    {
        $hero_section->delete();
        return back()->with('success','Hero Deleted Successfully');
    }
}
