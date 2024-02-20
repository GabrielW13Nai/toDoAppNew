<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PermissionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/auth/register', function () {
    return view('auth.register');
})->name('auth.register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth' , 'role:admin', 'verified'])->name('admin.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function(){
    if(auth()->check()){
        auth()->user()->assignRole('user');
        $user = auth()->user();
        $tasks = $user->usersTasks()->latest()->get();  
        return view('dashboard', ['user' => $user, 'tasks' => $tasks]);
    }
})->name('dashboard');

// Route::get('/index', [IndexController::class, 'index']);

Route::middleware(['auth', 'role:admin', 'verified'])->name('admin.')->prefix('admin')->group(function(){
    // Route::get('/index', [IndexController::class, 'index'])->name('index');
    Route::get('/', [UserController::class, 'display'])->name('index');
    Route::get('/users/index', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/add', [UserController::class, 'showAdd'])->name('users.add');
    Route::post('/users/add', [UserController::class, 'add'])->name('users.addition');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles.add');
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions.add');
    Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/roles', RoleController::class);
    Route::resource('/permissions', PermissionController::class);
    Route::get('/users/tasks', [UserController::class, 'showTasks'])->name('users.showTasks');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles.add');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions.add');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.remove');
    Route::get('/users/tasks/{task}/edit', [UserController::class, 'showeditIndividualTask'])->name('users.tasks.edit.show');
    Route::get('/users/tasks/{task}', [UserController::class, 'showIndividualTask'])->name('users.tasks.show');
    // Route::get('/users/{user}/{task}', [UserController::class, 'show'])->name('users.view');
    Route::put('/users/tasks/{task}', [UserController::class, 'editIndividualTask'])->name('users.tasks.edit');
    Route::delete('/users/tasks/{task}', [UserController::class, 'deleteIndividualTask'])->name('users.tasks.destroy');
});

Route::get('/addtask', [TaskController::class, 'showAddTask']);
Route::get('/taskdisplay/{task}', [TaskController::class, 'showCurrentTask']);

Route::post('/addtask', [TaskController::class, 'createTask']);

Route::get('/edittask/{task}', [TaskController::class, 'showEditTask']);

Route::put('/edittask/{task}', [TaskController::class, 'updatedTask']);

Route::delete('/deletetask/{task}', [TaskController::class, 'deletedTask']);


require __DIR__.'/auth.php';