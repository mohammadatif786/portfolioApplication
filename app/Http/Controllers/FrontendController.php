<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Carbon\Carbon;

class FrontendController extends Controller
{
    public function index()
    {
        $about = AboutSection::first();
        $birthday = Carbon::parse($about->birthday)->format('d/m/Y');

        return view('welcome',compact('about','birthday'));
    }

    public function blog()
    {
        return view('blog');
    }
}
