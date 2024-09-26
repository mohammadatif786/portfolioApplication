<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $about = AboutSection::where('user_id',$userId)->first();
    
        return view('welcome', compact('about'));
    }

    public function blog()
    {
        return view('blog');
    }
}
