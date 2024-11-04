<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceFormRequest;
use Illuminate\Http\Request;
use App\Models\Service;
use yajra\DataTables\DataTables;

use Auth;

class ServiceController extends Controller
{

    public function index(Request $request){

        if ($request->ajax()) {
            
            $serviceData = Service::orderBy('id','desc');

            return DataTables::of($serviceData)
                ->addColumn('action', function($serviceData) {
                    return '
                        <a id="editService" data-id="'.$serviceData->id.'" class="btn btn-sm btn-primary mb-1">Edit</a>
                        <a id="deleteService" data-id="'.$serviceData->id.'" class="btn btn-sm btn-danger">Delete</a>
                    ';
                })
                ->addColumn('icon', function($serviceData){
                    return '<i class=" '.$serviceData->icon.' "></i>';
                })
                ->addColumn('is_active', function($serviceData){
                    return '<input type="checkbox" '. ($serviceData->is_active == "on" ? "checked" : "") .' disabled>';
                })
                ->make(true);

        }

        return view('admin.pages.services_section');
    }

    public function store(ServiceFormRequest $request){

        $validate = $request->validated();

        $userId = Auth::user()->id;

        try {
            
            Service::updateOrcreate(
                [
                    'user_id' => $userId,
                    'title' => $validate['title'],
                    'description' => $validate['description'],
                    'icon' => $validate['icon'],
                    'is_active' => $validate['is_active'] ?? 'off',

                ]
            );

            return back()->with('success','Service Added');

        } catch (Exception $e) {
            
            \Log::error('Service Added failed', $e->getMessage());

            return back()->with('error','Something Wrong!');
        }
    }

    public function getServieModal()
    {
        return view('admin.pages.models.servicesModal');
    }

    public function edit($id)
    {
        $service = Service::findOrfail($id);

        return view('admin.pages.models.servicesEditModal', compact('service'));
    }

     public function update($id, ServiceFormRequest $request){

        $validate = $request->validated();
        $userId = Auth::user()->id;

        try {
            
            Service::updateOrcreate(
                ['id'=> $id],
                [
                    'user_id' => $userId,
                    'title' => $validate['title'],
                    'description' => $validate['description'],
                    'icon' => $validate['icon'],
                    'is_active' => $validate['is_active'] ?? 'off',

                ]
            );

            return back()->with('success','Service Updated');

        } catch (Exception $e) {
            \Log::error('Update Service failed', $e->getMessage());

            return back()->with('error','Something Wrong!');
        }
    }

    public function delete($id){

        return Service::findOrfail($id)->delete();
    }
}
