<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use yajra\DataTables\DataTables;
use App\Http\Requests\SkillFormRequest;
use App\Models\Skill;
use Auth;

class SkillsController extends Controller
{
    public function index(Request $request)
    {
        $skillData = Skill::orderBy('id','desc');

        if ($request->ajax()) {
            
            return DataTables::of($skillData)
                    ->addColumn('action',function($skillData){
                        return '
                                <a data-id="'.$skillData->id.'" id="editSkill" class="btn btn-primary">Edit</a>
                                <a data-id="'.$skillData->id.'" id="deleteSkill" class="btn btn-danger">Delete</a>

                                ';
                    })
                    ->make(true);
        }

        return view('admin.pages.skills');
    }

    public function getSkillModal()
    {
        return view('admin.pages.models.skillsModal');
    }

    public function store(SkillFormRequest $request)
    {
        $validate = $request->validated();
        $userId = Auth::user()->id;

        try {
            
            Skill::Create([
                'user_id' => $userId,
                'name' => $validate['name'],
                'proficiency' => $validate['proficiency'],
            ]);

            return back()->with('success','Skills Added Successfully');

        } catch (Exception $e) {
          
          \Log::error('Skill Store Failed', $e->getMessage());

          return back()->with('Something Wrong!');  
        }
    }

    public function edit($id)
    {
        $skillData = Skill::findOrfail($id);
        return view('admin.pages.models.skillEditModal',compact('skillData'));
    }

    public function update(SkillFormRequest $request, $id)
    {
        $validate = $request->validated();
        $userId = Auth::user()->id;

        try {
            
            Skill::updateOrcreate(
                ['id' => $id],
                [
                'user_id' => $userId,
                'name' => $validate['name'],
                'proficiency' => $validate['proficiency'],
            ]);

            return back()->with('success','Skills Updated Successfully');

        } catch (Exception $e) {
          
          \Log::error('Skill Update Failed', $e->getMessage());

          return back()->with('Something Wrong!');  
        }
    }

    public function delete($id)
    {
        Skill::findOrfail($id)->delete();

        return back()->with('error','Skill Deleted');
    }
}