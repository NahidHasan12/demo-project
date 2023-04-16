<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $moduleRole = Module::updateOrCreate(['name'=>'Role Manage'],['name'=>'Role Manage']);
        permission::create([
            'module_id' => $moduleRole->id,
            'name'      => 'Role Access',
            'slug'      => 'app.roles.index'
        ]);
        permission::create([
            'module_id' => $moduleRole->id,
            'name'      => 'Role Create',
            'slug'      => 'app.roles.create'
        ]);
        permission::create([
            'module_id' => $moduleRole->id,
            'name'      => 'Role Edit',
            'slug'      => 'app.roles.edit'
        ]);
        permission::create([
            'module_id' => $moduleRole->id,
            'name'      => 'Role Delete',
            'slug'      => 'app.roles.destroy'
        ]);
       
        $moduleUser = Module::updateOrCreate(['name'=>'User Manage'],['name'=>'User Manage']);
        permission::create([
            'module_id' => $moduleUser->id,
            'name'      => 'User Access',
            'slug'      => 'app.users.index'
        ]);
        permission::create([
            'module_id' => $moduleUser->id,
            'name'      => 'User Create',
            'slug'      => 'app.users.create'
        ]);
        permission::create([
            'module_id' => $moduleUser->id,
            'name'      => 'User Edit',
            'slug'      => 'app.users.edit'
        ]);
        permission::create([
            'module_id' => $moduleUser->id,
            'name'      => 'User Destroy',
            'slug'      => 'app.users.destroy'
        ]);
       

    }
}
