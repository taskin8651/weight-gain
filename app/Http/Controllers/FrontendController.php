<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\HeroSection;
use App\Models\Program;
use App\Models\About;
use App\Models\Service;
use App\Models\DietPlan;
use App\Models\Transformation;
use App\Models\Testimonial;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\VideoReview;



class FrontendController extends Controller
{
    public function home()
    {
        $setting = Setting::first();
        $heroes = HeroSection::all();
        $programs = Program::latest()->get();
        $about = About::latest()->first();
        $services = Service::latest()->get();
        $dietPlans = DietPlan::latest()->get();
        $transformations = Transformation::latest()->get();
        $testimonials = Testimonial::latest()->get();
        $brands = Brand::latest()->get();
         $videoReviews = VideoReview::where('is_active',1)
                    ->latest()
                    ->get();

        return view('frontend.home', compact(
            'setting',
            'heroes',
            'programs',
            'about',
            'services',
            'dietPlans',
            'transformations',
            'testimonials',
            'brands',
            'videoReviews'
        ));
    }

    /* Contact Form */
    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        return back()->with('contact_success',
            'Thank you! We will contact you soon.');
    }

    /* Optional Program Detail Page */
    public function programDetail($id)
    {
        $program = Program::findOrFail($id);

        return view('frontend.program-detail', compact('program'));
    }


     public function programs()
    {
        $programs = Program::latest()->get();
        return view('frontend.programs', compact('programs'));
    }

    public function services()
    {
        $services = Service::latest()->get();
        return view('frontend.services', compact('services'));
    }

    public function about()
    {
        $about = About::first();
        return view('frontend.about', compact('about'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

   

public function diet(Request $request)
{
    $type = $request->type;

    $dietPlans = DietPlan::with('program')
        ->when($type, function ($query) use ($type) {
            $query->where('goal', $type);
        })
        ->latest()
        ->paginate(9);

    return view('frontend.diet.index', compact('dietPlans','type'));
}


public function dietDetail($id)
{
    $diet = DietPlan::findOrFail($id);
    return view('frontend.diet.show', compact('diet'));
}


public function transformations()
{
    $transformations = Transformation::latest()->get();
    return view('frontend.transformations.index', compact('transformations'));
}

public function transformationDetail($id)
{
    $transformation = Transformation::findOrFail($id);
    return view('frontend.transformations.show', compact('transformation'));
}

public function serviceDetail($id)
{
    $service = Service::findOrFail($id);

        $recentServices = Service::where('id','!=',$id)
                        ->latest()
                        ->take(3)
                        ->get();


    return view('frontend.service-detail', compact('service','recentServices'));
}

}
