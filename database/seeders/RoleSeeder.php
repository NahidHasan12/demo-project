<?php

namespace Database\Seeders;

use App\Models\role;
use App\Models\permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $all_permissioms = permission::all();

        
            role::create([
                'name' => 'Super Admin',
                'slug' => 'super-admin'
            ])->permissions()->sync($all_permissioms->pluck('id'));
            role::create([
                'name' => 'Admin',
                'slug' => 'admin'
            ])->permissions()->sync($all_permissioms->pluck('id'));;
            role::create([
                'name'       => 'Client',
                'slug'       => 'client'
            ]);
       
    }
}
