<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Response;

class TaskPolicy
{
    /**
     * Create a new policy instance.
     */

    public function create(User $user)
    {

        //
        // dd($user->permissions());
        return $user->is_admin || $user->permissions() === 'add tasks';
        
    }

    public function update(User $user, Task $task){
        return $user->is_admin || (auth()->check() && $task->user_id === auth()->id());
        
    }

    public function delete(User $user, Task $task){
        return $user->is_admin || (auth()->check() && $task->user_id === auth()->id());
    }
    
}
