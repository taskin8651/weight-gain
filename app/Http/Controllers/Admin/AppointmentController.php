<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with('user')
                        ->latest()
                        ->paginate(10);

        return view('admin.appointments.index', compact('appointments'));
    }

    public function approve(Appointment $appointment)
    {
        $appointment->update([
            'status' => 'approved'
        ]);

        return back()->with('success','Appointment Approved');
    }

    public function reject(Appointment $appointment)
    {
        $appointment->update([
            'status' => 'rejected'
        ]);

        return back()->with('success','Appointment Rejected');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return back()->with('success','Deleted Successfully');
    }


    public function store(Request $request)
{
    $request->validate([
        'appointment_date' => 'required|date',
        'goal' => 'required'
    ]);

    Appointment::create([
        'user_id' => auth()->id(),
        'appointment_date' => $request->appointment_date,
        'goal' => $request->goal,
        'message' => $request->message,
        'status' => 'pending'
    ]);

    return back()->with('success','Appointment Requested');
}

public function update(Request $request, Appointment $appointment)
{
    $appointment->update([
        'status' => $request->status
    ]);

    return back()->with('success','Status Updated Successfully');
}


}
