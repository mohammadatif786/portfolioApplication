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
        
        return view('admin.pages.about_section',compact('aboutDetails'));
    }

    public function store(AboutSectionFormRequest $request)
    {

        $validate = $request->validated(); 

        if ($request->has('image_url')) {
            
            $image_name = time().'_'. $request->file('image_url')->getClientOriginalName();
            $request->file('image_url')->move(public_path('backend/admin/images'), $image_name);

            $validate['image_url'] = $image_name;
       }

        if ($request->has('cv_url')) {
            
             $cv_name = time().'_'. $request->file('cv_url')->getClientOriginalName();
             $request->file('cv_url')->move(public_path('backend/admin/files'), $cv_name);

             $validate['cv_url'] = $cv_name;

        }

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
            'image_url' => $validate['image_url'],
        ]);

        return redirect()->back()->with('success','Update');
    }
}
