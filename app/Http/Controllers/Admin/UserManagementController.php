<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class UserManagementController extends Controller
{
    public function createRole(Request $request)
    {
        $roles = Role::orderBy('id','desc');

        if ($request->ajax()) 
        {
            return DataTables::of($roles)
                    ->addColumn('action',function($roles){
                        return '<button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="confirmDelete(' . $roles->id . ')">Delete</button>';
            })
            ->rawColumns(['action'])
            ->make(true);

        }

        return view('admin.userManagement.createRole');
    }
}
