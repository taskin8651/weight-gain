<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
   public function index()
{
    $setting = Setting::first();

    if (!$setting) {
        $setting = Setting::create([]);
    }

    return view('admin.settings.index', compact('setting'));
}


public function update(Request $request)
{
    $setting = Setting::first();

    $data = $request->all();

    if ($request->hasFile('logo')) {
        $data['logo'] = $request->file('logo')->store('settings','public');
    }

    if ($request->hasFile('favicon')) {
        $data['favicon'] = $request->file('favicon')->store('settings','public');
    }

    $setting->update($data);

    return back()->with('success','Settings Updated Successfully');
}

}
