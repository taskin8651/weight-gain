<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->paginate(10);
        return view('admin.programs.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.programs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
            'price' => 'nullable|numeric',
            'duration' => 'required',
            'image' => 'nullable|image'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('programs','public');
        }

        Program::create($data);

        return redirect()->route('programs.index')
            ->with('success','Program Created Successfully');
    }

    public function edit(Program $program)
    {
        return view('admin.programs.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
            'price' => 'nullable|numeric',
            'duration' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('programs','public');
        }

        $program->update($data);

        return redirect()->route('programs.index')
            ->with('success','Program Updated Successfully');
    }

    public function destroy(Program $program)
    {
        $program->delete();
        return back()->with('success','Program Deleted');
    }
}
