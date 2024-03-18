<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Permission;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // private $permissions  = [
    //     'create task',
    //     'read task',
    //     'update task',
    //     'delete task',
    //     // 'create user',
    //     // 'read user',
    //     // 'update user',
    //     // 'delete user',
    //  ];

     
    public function run(): void
    {
        // Schema::disableForeignKeyConstraints();
        // Role::truncate();
        // Schema::enableForeignKeyConstraints();        
        
        // foreach($this->permissions as $permission){
        //     Permission::create(['name' => $permission]);
        // }

        // $permissions = Permission::pluck('id', 'id')->all();
        // //
        Role::create(['name' => 'admin']);
        // ->syncPermissions($permissions);
        Role::create(['name' => 'agent']);
        Role::create(['name' => 'Supervisor']);
        // ->syncPermissions($permissions);

    }
}
