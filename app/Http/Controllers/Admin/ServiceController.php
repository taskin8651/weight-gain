<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_one' => 'nullable|image',
            'image_two' => 'nullable|image',
        ]);

        $data = $request->all();

        if ($request->hasFile('image_one')) {
            $data['image_one'] = $request->file('image_one')
                ->store('services','public');
        }

        if ($request->hasFile('image_two')) {
            $data['image_two'] = $request->file('image_two')
                ->store('services','public');
        }

        Service::create($data);

        return redirect()->route('services.index')
            ->with('success','Service Created Successfully');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('image_one')) {
            $data['image_one'] = $request->file('image_one')
                ->store('services','public');
        }

        if ($request->hasFile('image_two')) {
            $data['image_two'] = $request->file('image_two')
                ->store('services','public');
        }

        $service->update($data);

        return redirect()->route('services.index')
            ->with('success','Service Updated Successfully');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return back()->with('success','Service Deleted Successfully');
    }
}
