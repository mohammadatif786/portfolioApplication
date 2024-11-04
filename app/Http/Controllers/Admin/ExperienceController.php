<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExperienceFormRequest;
use Illuminate\Http\Request;
use App\Models\Experience;
use yajra\DataTables\DataTables;
use Auth;


class ExperienceController extends Controller
{
    public function index(Request $request)
    {
        $expData= Experience::orderBy('id','desc');

        if ($request->ajax()) {
            
            return DataTables::of($expData)
                    ->addColumn('action',function($expData){
                        return '
                                <a data-id="'.$expData->id.'" id="editExp" class="btn btn-primary">Edit</a>
                                <a data-id="'.$expData->id.'" id="deleteExp" class="btn btn-danger">Delete</a>
                        ';
                    })
                    ->make(true);
        }
        return view('admin.pages.experience_section');
    }

    public function getexperienceModal()
    {
        return view('admin.pages.models.experienceModal');
    }

    public function store(ExperienceFormRequest $request)
    {

        $validate = $request->validated();

        $validate['user_id'] = Auth::user()->id;

        try {

            Experience::create($validate);

            return back()->with('success','Experience Added Successfully');
            
        } catch (Exception $e) {
         
            \Log::error('Error while add experience', $e->getMessage());

            return back()->with('error','Something Wrong!');

        }
    }

    public function edit($id)
    {
        $expData = Experience::findOrfail($id);

        return view('admin.pages.models.expEditModal',compact('expData'));
    }

    public function update(ExperienceFormRequest $request, $id)
    {

        $validate = $request->validated();

        $validate['user_id'] = Auth::user()->id;

        try {

            Experience::updateOrcreate([ 'id' => $id ],$validate);

            return back()->with('success','Experience Update Successfully');
            
        } catch (Exception $e) {
         
            \Log::error('Error while add experience', $e->getMessage());

            return back()->with('error','Something Wrong!');

        }
    }

    public function delete($id)
    {
        Experience::findOrfail($id)->delete();

        return response()->json([

            'status' => 200,
            'message' => 'Deleted'
        ]);
    }
}
