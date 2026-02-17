<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DietPlan;
use App\Models\Program;
use Illuminate\Http\Request;

class DietPlanController extends Controller
{
    public function index()
    {
        $dietPlans = DietPlan::with('program')
            ->latest()
            ->paginate(10);

        return view('admin.diet_plans.index', compact('dietPlans'));
    }

    public function create()
    {
        $programs = Program::where('is_active', 1)->get();

        return view('admin.diet_plans.create', compact('programs'));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'title'       => 'required|string|max:255',
        'description' => 'required|string',
        'goal'        => 'required|in:weight_loss,weight_gain',
        'program_id'  => 'required|exists:programs,id',
        'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')
            ->store('diet_plans', 'public');
    }

    DietPlan::create($validated);

    return redirect()
        ->route('admin.diet-plans.index')
        ->with('success', 'Diet Plan Created Successfully');
}


    public function edit(DietPlan $diet_plan)
    {
        $programs = Program::where('is_active', 1)->get();

        return view('admin.diet_plans.edit', compact('diet_plan', 'programs'));
    }

    public function update(Request $request, DietPlan $diet_plan)
{
    $validated = $request->validate([
        'title'       => 'required|string|max:255',
        'description' => 'required|string',
        'goal'        => 'required|in:weight_loss,weight_gain',
        'program_id'  => 'required|exists:programs,id',
        'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    if ($request->hasFile('image')) {

        // Optional: old image delete
        if ($diet_plan->image && \Storage::disk('public')->exists($diet_plan->image)) {
            \Storage::disk('public')->delete($diet_plan->image);
        }

        $validated['image'] = $request->file('image')
            ->store('diet_plans', 'public');
    }

    $diet_plan->update($validated);

    return redirect()
        ->route('admin.diet-plans.index')
        ->with('success', 'Diet Plan Updated Successfully');
}


    public function destroy(DietPlan $diet_plan)
    {
        $diet_plan->delete();

        return redirect()
            ->route('admin.diet-plans.index')
            ->with('success', 'Diet Plan Deleted Successfully');
    }
}
