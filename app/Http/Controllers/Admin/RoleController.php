<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index(){
        // $roles = Role::whereNotIn('name', ['admin'])->get();
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function create(){
        return view('admin.roles.create');
    }

    public function store(Request $request){
        $incoming = $request->validate([
            'name' => 'required|min:3',
        ]);

        Role::create($incoming);
        // session()->flash('status', 'role was successfully created!');
        return redirect()->back()->with('message',"Role created successfully!");
    }

    // public function show($id){
    //     $role = Role::find($id);
    //     return view('admin.roles.edit', compact('role'))
    //     ->with('roles', $role);
    // }

    public function edit($id){
        $role = Role::find($id);
        $permissions = Permission::all();

        return view('admin.roles.edit', compact('role', 'permissions'))
        ->with('roles', $role);
    }

    public function update(Request $request, Role $role){
        $incoming = $request->validate([
            'name' => 'required|min:3',
        ]);

        $role->update($incoming);
        return redirect()->back()->with('message',"Role updated successfully!");  
    }

    public function destroy(Role $role){
        $role->delete();
        return redirect()->route('admin.roles.index')
        ->with('success', 'Role successfully deleted');
    }

    public function givePermission(Request $request, Role $role){

        if($role->hasPermissionTo($request->permission)){
            return redirect()->back()->with('errors', 'Role already has specified permission');
        }

        $role->givePermissionTo($request->permission);
        return redirect()->back()->with('message', 'Permission assigned successfully');
    }


    public function revokePermission(Role $role, Permission $permission){
        if($role->hasPermissionTo($permission)){
            $role->revokePermissionTo($permission);
            return redirect()->back()
            ->with('message', 'Permission removed successfully');
        }

        return redirect()->back()
            ->with('errors', 'Permission does not exist');
    }
}