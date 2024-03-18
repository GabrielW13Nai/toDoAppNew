<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Task;
use App\Models\User;
use App\Policies\TaskPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
        Task::class => TaskPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        $this->registerPolicies();

        // Gate::define('add_tasks', function(User $user){return $user->is_admin;});
        // Gate::define('edit_tasks', fn(User $user)=>$user->is_admin);
        // Gate::define('delete_tasks', function(User $user){return $user->is_admin;});
        // Gate::define(ability: 'edit_tasks', fn(User $user) => $user->is_admin);
        // Gate::define(ability: 'edit_tasks', fn(User $user) => $user->is_superuser);

    }
}
