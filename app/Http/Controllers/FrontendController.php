<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
    
        return view('landing-page');
    }

    public function blog()
    {
        return view('blog');
    }
}
