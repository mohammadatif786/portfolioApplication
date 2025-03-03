<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\Service;
use App\Models\User;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use Carbon\Carbon;
use Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $about    = AboutSection::first();
        $birthday = Carbon::parse($about->birthday)->format('d/m/Y');
        $userData = User::inRandomOrder()->first();
        $services = Service::where('is_active','on')->get();
        $skills   = Skill::get();
        $experiences = Experience::orderBy('id','desc')->get();
        $educations  = Education::get();

        return view('welcome', compact('about', 'birthday', 'userData','services','skills','experiences','educations'));
        
    }

    public function blog()
    {
        return view('blog');
    }
}
