<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Task;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function display(){
        $users = User::all();
        return view('admin.index', compact('users'));
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->back()->with('message', 'User has been successfully deleted');
    }

    public function showAdd(){
        return view('admin.users.add');
    }

    public function add(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:5|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);
    
        if ($validator->fails()) {
            return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }
    
        try{
            User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
    
        return redirect()->back()->with('message', 'User registered successful');
    }
    
        catch(\Exception $e){
            return redirect()->back()->with('errors', 'An error occurred during user creation');
    }
    }

    // public function assignRole(){

    // }

    public function show($id){
        $roles = Role::all();
        $role = Role::find($id);
        $permissions = Permission::all();
        $users = User::all();
        $user = User::find($id);
        // $user_role_items = $role->users();
        // dd($user_role_items);
        return view('admin.users.role', compact('user', 'roles', 'permissions', 'role', 'users'));
        // ->with('user', $user);
    }

    public function givePermission(Request $request, User $user){
        if($user->hasPermissionTo($request->permission)){
            return redirect()->back()->with("errors", "User has permission");
        }
        $user->givePermissionTo($request->permission);
        return redirect()->back()->with('message', "Permission assigned successfully");
    }

    public function revokePermission(User $user, Permission $permission){
        if($user->hasPermissionTo($permission)){
            $user->revokePermissionTo($permission);
            return redirect()->back()->with('message', "Permission assigned successfully");
        }
        return redirect()->back()->with('errors', "Permission does not exist");
    }

    public function assignRole(Request $request, User $user){

        if($user->hasRole($request->role)){
            return redirect()->back()->with('errors', 'Role does not exist');
        }
        $user->assignRole($request->role);
        // dd($request);

        return redirect()->back()->with('message', "Role successfully assigned");
    }

    public function removeRole(User $user, Role $role){

        // dd($user->roles, $role->id);

        if($user->hasRole($user->roles, $role->id)){
            $user->removeRole($role);
            return redirect()->back()->with('message', "Role successfully removed");
        }

        return redirect()->back()->with('errors', "Role doesn't exist");
    }

    public function showTasks(){
        $tasks = Task::all();
        return view('admin.users.assign', compact('tasks'));
    } 

    public function showIndividualTask($id){
        $task = Task::find($id);
        $user_id = $task->user_id;
        $user = User::find($user_id);
        return view('admin.users.view', compact('task', 'user'));
    }

    public function deleteIndividualTask(Task $task){
        $task->delete();
        return redirect()->back()->with('message', 'Task deleted successfully');
    }

    public function showeditIndividualTask($id){
        $task = Task::find($id);
        $user_id = $task->user_id;
        $users = User::all();
        return view('admin.users.editTask', compact('task', 'users'));
    }
    
    public function editIndividualTask(Request $request, Task $task){
        $incoming = $request->validate([
            "task_name" => 'required',
            "task_description" => 'required',
            "user_id" => 'required'
        ]);

        $incoming["task_name"] = strip_tags($incoming["task_name"]);
        $incoming["task_description"] = strip_tags($incoming["task_description"]);
        $incoming["user_id"] = strip_tags($incoming["user_id"]);

        $task->update($incoming);
        return redirect()->back()->with('message', "Task updated successfully");
    }

    

}
