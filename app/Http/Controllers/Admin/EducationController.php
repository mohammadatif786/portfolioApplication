<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use yajra\DataTables\DataTables;
use App\Models\Education;
use App\Http\Requests\EducationFormRequest;
use Auth;
use App\Jobs\ContactMailJob;

class EducationController extends Controller
{
    public function index(Request $request)
    {

        $educationData = Education::orderBy('id','desc');

        if ($request->ajax()) {
            
            return DataTables::of($educationData)
                    ->addColumn('action',function($educationData){
                        return '
                                <a data-id="'.$educationData->id.'" id="editEducation" class="btn btn-primary">Edit</a>
                                <a data-id="'.$educationData->id.'" id="deleteEducation" class="btn btn-danger">Delete</a>
                                ';
                    })
                    ->make(true);
        }

        return view('admin.pages.education_section');
    }

    public function geteducationModal()
    {
        return view('admin.pages.models.educationModal');
    }

    public function store(EducationFormRequest $request)
    {

        $validate = $request->validated();

        $validate['user_id'] = Auth::user()->id;

        try {

            Education::create($validate);

            return back()->with('success','Education Added Successfully');
            
        } catch (Exception $e) {
         
            \Log::error('Error while add education', $e->getMessage());

            return back()->with('error','Something Wrong!');

        }
    }

     public function edit($id)
    {
        $educationData = Education::findOrfail($id);
        return view('admin.pages.models.educationEditModal', compact('educationData'));
    }

    public function update(EducationFormRequest $request, $id)
    {

        $validate = $request->validated();

        $validate['user_id'] = Auth::user()->id;

        try {

            Education::updateOrcreate(['id' => $id],$validate);

            return back()->with('success','Education Update Successfully');
            
        } catch (Exception $e) {
         
            \Log::error('Error while update education', $e->getMessage());

            return back()->with('error','Something Wrong!');

        }
    }

     public function delete($id)
    {
        Education::findOrfail($id)->delete();

        return response()->json([

            'status' => 200,
            'message' => 'Deleted'
        ]);
    }
}
