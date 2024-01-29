<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// User
use App\Models\User;
// Hash
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::create([
            'name' => 'admin',
            'email' => 'admin@campusleben-es.de',
            'password' => Hash::make(env('admin_password')),
        ]);

    }
}
