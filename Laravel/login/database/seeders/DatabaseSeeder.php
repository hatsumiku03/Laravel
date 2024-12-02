<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
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
        $user_i = User::factory()->create(["name" => "qwssd1", "email" => "i@i.i", "password" => "i"]);
        $user_o = User::factory()->create(["name" => "Oakpedrotres", "email" => "o@o.o", "password" => "o"]);
        $user_u = User::factory()->create(["name" => "Ubby07", "email" => "u@u.u", "password" => "u"]);

        $user_ids = [$user_a->id, $user_e->id, $user_i->id, $user_o->id, $user_u->id ];
        for($i = 1; $i<11; $i++) {
            News::factory()->create(["user_id"=> array_rand(array_flip($user_ids))]);
        }
    }
}
