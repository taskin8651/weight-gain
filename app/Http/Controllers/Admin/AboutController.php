<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
   public function index()
{
    $abouts = About::latest()->paginate(10);
    return view('admin.abouts.index', compact('abouts'));
}

public function create()
{
    return view('admin.abouts.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'nullable|image',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')
            ->store('abouts','public');
    }

    About::create($data);

    return redirect()->route('abouts.index')
        ->with('success','About Added Successfully');
}

public function edit(About $about)
{
    return view('admin.abouts.edit', compact('about'));
}

public function update(Request $request, About $about)
{
    $data = $request->all();

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')
            ->store('abouts','public');
    }

    $about->update($data);

    return redirect()->route('abouts.index')
        ->with('success','Updated Successfully');
}

public function destroy(About $about)
{
    $about->delete();
    return back()->with('success','Deleted Successfully');
}

}
