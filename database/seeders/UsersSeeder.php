<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'Emiliano',
            'last_name' => 'Estevez',
            'email' => 'admin@test.com',
            'password' => Hash::make('Emiliano.2024!')
        ]);
    }
}
