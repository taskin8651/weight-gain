<?php

namespace App\Http\Controllers\Custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function show($id)
{
    $program = Program::findOrFail($id);
    $programs = Program::where('is_active', 1)
                        ->where('id', '!=', $id)
                        ->latest()
                        ->take(4)
                        ->get();
    return view('custom.program-details', compact('program', 'programs'));
}

public function index()
{
    $programs = Program::where('is_active', 1)
                        ->latest()
                        ->paginate(6); // 6 per page

    return view('custom.course', compact('programs'));
}

}
