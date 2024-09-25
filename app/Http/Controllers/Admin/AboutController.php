<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AboutSectionFormRequest;
use App\Models\AboutSection;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $aboutDetails = AboutSection::where('user_id',$userId)->first();
        
        return view('admin.about_section',compact('aboutDetails'));
    }

    public function store(AboutSectionFormRequest $request)
    {
        $validate = $request->validated();

        $validate['user_id'] = Auth::user()->id;

        AboutSection::updateOrcreate(
            ['user_id' => $validate['user_id']],
            [
            'title' => $validate['title'],
            'bio' => $validate['bio'],
            'birthday' => $validate['birthday'],
            'phone' => $validate['phone'],
            'address' => $validate['address'],
            'languages' => $validate['languages'],
            'freelance' => $validate['freelance'],
            'cv_url' => $validate['cv_url'],
        ]);

        return redirect()->back()->with('success','Update');
    }
}
