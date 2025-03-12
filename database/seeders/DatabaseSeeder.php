<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'nanas',
            'email' => 'nasywaaureliayuandra@mail.ugm.ac.id',
            'password' => bcrypt('Admin'),
        ]);
        User::factory()->create([
            'name' => 'nia',
            'email' => 'salsa@gmail.com',
            'password' => bcrypt('Salsa1342'),
        ]);
    }
}
