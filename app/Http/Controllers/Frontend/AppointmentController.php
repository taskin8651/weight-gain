<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Program;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create()
    {
        $programs = Program::all();
        return view('frontend.appointment', compact('programs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'program_id' => 'required',
            'date' => 'required|date',
            'message' => 'nullable'
        ]);

        Appointment::create($request->all());

        return redirect()->back()
            ->with('success','Appointment Booked Successfully!');
    }
}
