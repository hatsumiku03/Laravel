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
        $user_a = User::factory()->create(["name" => "Mr Babu", "email" => "a@a.a", "password" => "a"]);
        $user_e = User::factory()->create(["name" => "Martiluski07", "email" => "e@e.e", "password" => "e"]);
    }
}
