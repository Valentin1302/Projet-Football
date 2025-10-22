<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'email' => env('AUTH_LOCAL_EMAIL'),
            'nom' => env('AUTH_LOCAL_NOM'),
            'prenom' => env('AUTH_LOCAL_PRENOM'),
            'password' => bcrypt('password'),
        ]);
    }
}
