<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        //

        User::create([
                'name' => 'Demo_User',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => '123456',
                'is_admin' => 1,
            
        ])->assignRole(['admin']);

        User::create([
            'name' => 'test_agent',
            'email' => 'test@gmail.com',
            'email_verified_at' => now(),
            'password' => '123456',
            'is_admin' => 0,
        
    ])->assignRole('agent');

    User::create([
        'name' => 'supervisor_user',
        'email' => 'supervisor@gmail.com',
        'email_verified_at' => now(),
        'password' => '123456',
        'is_admin' => 0,
    
])->assignRole('Supervisor');

User::where('email', '=', 'admin@gmail.com')->first()->syncPermissions([
    'add_tasks',

    'delete_tasks',	

    'view_self_tasks',	

    'export_tasks',	

    'view_all_tasks',
    
    'create_permission',

    'create_role',

    'edit_task',

    'alter_user_information',

    'add_user',

    'edit_user',

]);

        // $user->assignRole('user', 'admin');
        // $test->assignRole('user');
    }

    // $permissions = 
}
