<?php

namespace Database\Seeders;

use App\Models\role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $super = role::where('slug','super-admin')->first();
        User::create([
            'role_id' => $super->id,
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'super@gmail.com',
            'password' => Hash::make(12345678),
        ]);
        $admin = role::where('slug','admin')->first();
        User::create([
            'role_id' => $admin->id,
            'first_name' => 'Admin',
            'last_name' => 'Name',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(12345678),
        ]);
        $client = role::where('slug','client')->first();
        User::create([
            'role_id' => $client->id,
            'first_name' => 'Client',
            'last_name' => 'Name',
            'email' => 'client@gmail.com',
            'password' => Hash::make(12345678),
        ]);
    }
}
