<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;

class UserManagementController extends Controller
{
    //Role Methods
    public function indexRole(Request $request)
    {
        $roles = Role::orderBy('id', 'desc');

        if ($request->ajax()) {
            return DataTables::of($roles)
                ->addColumn('action', function ($roles) {

                    if ($roles->name == 'admin') {
                        return '';
                    }

                    return '

                        <div class="dropdown">
                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a data-id=' . $roles->id . ' id="editRole" class="dropdown-item" title="edit role"><i class="fas fa-pencil"></i> Edit </a></li>
                                <li><a href="' . route('admin.role.assign.permission', ['id' => $roles->id]) . '" class="dropdown-item" title="assign permissions to role"><i class="fas fa-copy"></i> Assign Permission </a></li>
                                <li> <a href="" class="dropdown-item" title="assign role to user"><i class="fas fa-clipboard-check"></i> Assign Users </a></li>
                                <li><a href="" class="dropdown-item" title="delete role"><i class="fas fa-trash"></i> elete</a> </li>
                            </ul>
                        </div>
                        ';
                })
                ->rawColumns(['action'])
                ->make(true);

        }

        return view('admin.userManagement.indexRole');
    }

    public function createRole()
    {
        return view('admin.userManagement.createRole');
    }

    public function storeRole(Request $request)
    {
        Role::create($request->all());

        return redirect()->back()->with('success', 'Role Created');
    }

    public function editRole($id)
    {
        $roleDetail = Role::findOrfail($id);

        return view('admin.userManagement.createRole', compact('roleDetail'));
    }

    public function updateRole(Request $request, $id)
    {
        Role::findOrfail($id)->update(['name' => $request->name]);

        return redirect()->back()->with('update', 'Role Update');
    }

    public function assignPermission($id)
    {
        $role = Role::findOrfail($id);
        $users = User::get();
        $permissions = Permission::get();

        $assignedPermissions = $role->permissions->pluck('id')->toArray();

        return view('admin.userManagement.assignPermission', compact('role', 'users', 'permissions', 'assignedPermissions'));
    }

    //Permission Methods
    public function indexPermission(Request $request)
    {
        $permissions = Permission::orderBy('id', 'desc');

        if ($request->ajax()) {
            return DataTables::of($permissions)
                ->addColumn('action', function ($permissions) {

                    return '
                        <div class="dropdown">
                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a data-id=' . $permissions->id . ' id="editPermission" class="dropdown-item"><i class="fas fa-pencil"></i> Edit</a></li>
                                <li> <a href="' . route("admin.permission.delete", ['id' => $permissions->id]) . '" class="dropdown-item"><i class="fas fa-trash"></i> Delete</a></li>
                            </ul>
                        </div> 
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);

        }

        return view('admin.userManagement.indexPermission');
    }

    public function createPermission()
    {
        return view('admin.userManagement.createPermission');
    }

    public function storePermission(Request $request)
    {
        Permission::create($request->all());

        return redirect()->back()->with('success', 'Permission Created');
    }

    public function editPermission($id)
    {
        $permissionDetail = Permission::findOrfail($id);

        return view('admin.userManagement.createPermission', compact('permissionDetail'));
    }

    public function updatePermission(Request $request, $id)
    {
        Permission::findOrfail($id)->update(['name' => $request->name]);

        return redirect()->back()->with('update', 'Permission Update');
    }

    public function deletePermission($id)
    {
        Permission::findOrfail($id)->delete();

        return redirect()->back()->with('info', 'Permission Delete');
    }

    public function indexUser(Request $request)
    {
        $users = User::orderBy('id', 'desc');
    
        if ($request->ajax()) {
            return DataTables::of($users)
                ->addColumn('action', function ($users) {
                    return '
                        <div class="dropdown d-inline-block">
                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="actionDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye"></i> View</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Edit</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-trash"></i> Delete</a></li>
                            </ul>
                        </div>
    
                        <div class="dropdown d-inline-block">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="statusDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Status
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="statusDropdown">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-check"></i> Active</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-ban"></i> Deactive</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-lock"></i> Temporary Lock</a></li>
                            </ul>
                        </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    
        return view('admin.userManagement.indexUser');
    }
    
}
