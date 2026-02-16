<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::latest()->paginate(10);
        return view('admin.settings.index', compact('settings'));
    }

    public function create()
    {
        return view('admin.settings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'site_name' => 'nullable|string',
            'logo' => 'nullable|image',
            'favicon' => 'nullable|image',
        ]);

        $data = $request->all();

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('settings','public');
        }

        if ($request->hasFile('favicon')) {
            $data['favicon'] = $request->file('favicon')->store('settings','public');
        }

        Setting::create($data);

        return redirect()->route('settings.index')
            ->with('success','Setting Created Successfully');
    }

    public function edit(Setting $setting)
    {
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'site_name' => 'nullable|string',
            'logo' => 'nullable|image',
            'favicon' => 'nullable|image',
        ]);

        $data = $request->all();

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('settings','public');
        }

        if ($request->hasFile('favicon')) {
            $data['favicon'] = $request->file('favicon')->store('settings','public');
        }

        $setting->update($data);

        return redirect()->route('settings.index')
            ->with('success','Setting Updated Successfully');
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return back()->with('success','Setting Deleted Successfully');
    }
}
