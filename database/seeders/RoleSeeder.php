<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Super Admin',
                'slug' => 'super-admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Admin',
                'slug' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Client',
                'slug'       => 'client',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        role::insert($data);
    }
}
