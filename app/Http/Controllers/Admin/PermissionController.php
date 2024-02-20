<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(){
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }

    public function create(){
        return view('admin.permissions.create');
    }

    public function store(Request $request){
        $incoming = $request->validate([
            'name' => 'required|min:3',
        ]);

        Permission::create($incoming);
        // session()->flash('status', 'Permission was successfully created!');
        return redirect()->back()->with('message',"Permission created successfully!");
    }

    public function edit($id){
        $roles = Role::all();
        $permission = Permission::find($id);
        return view('admin.permissions.edit', compact('permission', 'roles'))
        ->with('permissions', $permission);
    }

    public function update(Request $request, Permission $permission){
        $incoming = $request->validate([
            'name' => 'required|min:3',
        ]);

        $permission->update($incoming);
        return redirect()->back()->with('message',"Permission updated successfully!");
    }

    public function destroy(Permission $permission){
        $permission->delete();
        return redirect()->route('admin.permissions.index')
        ->with('success', 'Permission successfully deleted');
    }

    public function assignRole(Request $request, Permission $permission){
        if($permission->hasRole($request->role)){
            return redirect()->back()->with('errors', 'Permission already has roles assigned');
        }
        $permission->assignRole($request->role);
        return redirect()->back()->with('message', 'Role assigned to permission');
    }

    public function removeRole(Permission $permission, Role $role){
        if($permission->hasRole($role)){
            $permission->removeRole($role);
            return redirect()->back()->with('message', "Permission successfully removed");
        }
        return redirect()->back()->with('errors' , 'Permission does not exist');

    }
}
