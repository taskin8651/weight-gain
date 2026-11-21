<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with('program')
            ->latest()
            ->paginate(10);

        return view('admin.appointments.index', compact('appointments'));
    }

    public function approve(Appointment $appointment)
    {
        $appointment->update(['status' => 'approved']);

        return back()->with('success', 'Appointment Approved');
    }

    public function reject(Appointment $appointment)
    {
        $appointment->update(['status' => 'rejected']);

        return back()->with('success', 'Appointment Rejected');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return back()->with('success', 'Deleted Successfully');
    }



}
