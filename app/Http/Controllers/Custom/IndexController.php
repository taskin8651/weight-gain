<?php

namespace App\Http\Controllers\Custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroSection;
use App\Models\About;
use App\Models\Program;
use App\Models\VideoReview;
use App\Models\Testimonial;
use App\Models\Brand;



class IndexController extends Controller
{
    public function index()
    {
        $heroes = HeroSection::all();
        $about = About::first();
         $aboutItems = About::where('id', '!=', 1)->get(); 
        $programs = Program::where('is_active', 1)->latest()->take(6)->get();
         $videoReviews = VideoReview::where('is_active',1)
                        ->latest()
                        ->get();
        $testimonials = Testimonial::latest()->get();
         $brands = Brand::latest()->get();


        return view('custom.index', compact('heroes', 'about', 'programs', 'videoReviews', 'testimonials','brands', 'aboutItems'));
    }
}
