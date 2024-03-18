<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
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

        ];

        foreach($permissions as $permission){
            Permission::create(["name" => $permission]);
        }
    }

}
