<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\UserController as UsersController;

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

Route::get('/welcome', function () {
    return view('welcome');
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

Route::get('/dashboard', [UsersController::class, 'dashboard'])->name('dashboard');
    

// Route::get('/index', [IndexController::class, 'index']);

Route::middleware(['auth', 'verified'])->name('admin.')->prefix('admin')->group(function(){
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
    Route::post('/users/{user}/roles', [UserController::class, 'addRole'])->name('users.roles.add');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'deleteRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions.add');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.remove');
    Route::get('/users/tasks/{task}/edit', [UserController::class, 'showeditIndividualTask'])->name('users.tasks.edit.show');
    // Route::get('/users/{user}/{task}', [UserController::class, 'show'])->name('users.view');
    Route::get('/users/{user}/edit', [UserController::class, 'editUser'])->name('users.edit');
    Route::put('/users/{user}/update', [UserController::class, 'updateUser'])->name('users.update');
    Route::post('/users/tasks', [UserController::class, 'storeTask']);
    Route::get('/users/tasks/addTask', [UserController::class, 'showAddTask'])->name('users.addTask');
    Route::get('/users/tasks/{task}', [UserController::class, 'showIndividualTask'])->name('users.tasks.show');
    Route::put('/users/tasks/{task}', [UserController::class, 'editIndividualTask'])->name('users.tasks.edit');
    Route::delete('/users/tasks/{task}', [UserController::class, 'deleteIndividualTask'])->name('users.tasks.destroy');
});

Route::get('/taskdisplay/{task}', [TaskController::class, 'showCurrentTask']);

Route::get('/users/tasks/addTask', [UsersController::class, 'userAddTask']);

Route::get('/edittask/{task}', [TaskController::class, 'showEditTask']);

Route::put('/edittask/{task}', [TaskController::class, 'updatedTask']);

Route::delete('/deletetask/{task}', [TaskController::class, 'deletedTask']);


require __DIR__.'/auth.php';