<?php

// use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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
    return view('signup');
});

Route::get('/dashboard',  function (){
    // $tasks = Task::where('user_id', auth()->id())->get();
    if(auth()->check()){
        $user = auth()->user();
        $tasks =$user->usersTasks()->latest()->get();
        return view('dashboard', ['tasks' => $tasks, 'user' => $user]);
    }
    
})->name('dashboard');

Route::get("/login", function(){
    return view ('login');
});

Route::get('/register', function () {
    return view('signup');
});





Route::post('/register', [UserController::class, 'register']);

Route::post('/logout', [UserController::class, 'logout']);

Route::post('/login', [UserController::class, 'login']);

Route::post('/addtask', [TaskController::class, 'createTask']);        //Task creation

Route::get('/edittask/{task}', [TaskController::class, 'showEditTask']); //task edit form

Route::put('/edittask/{task}', [TaskController::class, 'updatedTask']);

Route::delete('/deletetask/{task}', [TaskController::class, 'deletedTask']);

// Route::get('/dashboard', [TaskController::class, 'index'] );

Route::get('/addtask', function () {
    return view('viewtask');
});

Route::get('/taskdisplay/{task}', [TaskController::class, 'showCurrentTask']);
