<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function testimonials()
    {
        return view('custom.testimonial');
    }

public function store(Request $request)
{
    $request->validate([
        'name'        => 'required|string|max:255',
        'designation' => 'nullable|string|max:255',
        'message'     => 'required|string',
        'rating'      => 'required|integer|min:1|max:5',
    ]);

    Testimonial::create([
        'name'        => $request->name,
        'designation' => $request->designation,
        'message'     => $request->message,
        'rating'      => $request->rating,
    ]);

    return back()->with('success', 'Thank you for your testimonial!');
}
}
