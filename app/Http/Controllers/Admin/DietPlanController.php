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
        $dietPlans = DietPlan::with('program')->latest()->paginate(10);
        return view('admin.diet_plans.index', compact('dietPlans'));
    }

    public function create()
    {
        $programs = Program::where('is_active',1)->get();
        return view('admin.diet_plans.create', compact('programs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'goal' => 'required',
            'program_id' => 'required'
        ]);

        DietPlan::create($request->all());

        return redirect()->route('diet-plans.index')
            ->with('success','Diet Plan Created Successfully');
    }

    public function edit(DietPlan $diet_plan)
    {
        $programs = Program::where('is_active',1)->get();
        return view('admin.diet_plans.edit', compact('diet_plan','programs'));
    }

    public function update(Request $request, DietPlan $diet_plan)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'goal' => 'required',
            'program_id' => 'required'
        ]);

        $diet_plan->update($request->all());

        return redirect()->route('diet-plans.index')
            ->with('success','Diet Plan Updated Successfully');
    }

    public function destroy(DietPlan $diet_plan)
    {
        $diet_plan->delete();
        return back()->with('success','Diet Plan Deleted');
    }
}
