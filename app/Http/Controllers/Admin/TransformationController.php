<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transformation;
use Illuminate\Http\Request;

class TransformationController extends Controller
{
    public function index()
    {
        $transformations = Transformation::latest()->paginate(10);
        return view('admin.transformations.index', compact('transformations'));
    }

    public function create()
    {
        return view('admin.transformations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'before_image' => 'required|image',
            'after_image' => 'required|image',
        ]);

        $data = $request->all();

        if ($request->hasFile('before_image')) {
            $data['before_image'] = $request->file('before_image')
                ->store('transformations','public');
        }

        if ($request->hasFile('after_image')) {
            $data['after_image'] = $request->file('after_image')
                ->store('transformations','public');
        }

        Transformation::create($data);

        return redirect()->route('transformations.index')
            ->with('success','Transformation Added Successfully');
    }

    public function edit(Transformation $transformation)
    {
        return view('admin.transformations.edit', compact('transformation'));
    }

    public function update(Request $request, Transformation $transformation)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('before_image')) {
            $data['before_image'] = $request->file('before_image')
                ->store('transformations','public');
        }

        if ($request->hasFile('after_image')) {
            $data['after_image'] = $request->file('after_image')
                ->store('transformations','public');
        }

        $transformation->update($data);

        return redirect()->route('transformations.index')
            ->with('success','Transformation Updated Successfully');
    }

    public function destroy(Transformation $transformation)
    {
        $transformation->delete();
        return back()->with('success','Deleted Successfully');
    }
}
