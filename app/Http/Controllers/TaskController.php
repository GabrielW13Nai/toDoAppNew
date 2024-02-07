<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller

// middleware and policies
{   

    public function showCurrentTask(Task $task){
        if(auth()->user()->id !== $task["user_id"]){
            return redirect('register');
        }
        return view('taskdisplay', ['task' => $task]);
    }
    
    public function deletedTask(Task $task){
        if(auth()->user()->id === $task['user_id']){
            $task->delete();
        }
        return redirect('dashboard');
    }


    public function updatedTask(Task $task, Request $request) {
        if(auth()->user()->id !== $task['user_id']){
        return redirect('register');
    }

        $incomingData = $request->validate([
            'task_name'=> 'required',
            'task_description'=> 'required',
        ]);

        $incomingData['task_name'] = strip_tags($incomingData['task_name']);
        $incomingData['task_description'] = strip_tags($incomingData['task_description']);

        $task->update($incomingData);
        return redirect('dashboard');

        }
    
    
    public function showEditTask(Task $task){
        if(auth()->user()->id !== $task['user_id']){
            return redirect('/register');
        }
        return view('edittask', ['task' => $task]);
}

//     public function showAddTask(){
//     return view('/viewtask');
// }
    
    public function createTask(Request $request){
        $incoming = $request->validate([
            "task_name" => 'required',     
            "task_description" => "required"
    ]);

        $incoming['task_name'] = strip_tags($incoming['task_name']);
        $incoming['task_description'] = strip_tags($incoming['task_description']);
        $incoming['user_id'] = auth()->id();

        Task::create($incoming);
        return redirect('dashboard');
    
}
    //
}
