<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        DB::table('roles')->insert([
            [
                "name" => "admin",
            ],
            [
                "name" => "webmaster",
            ],
            [
                "name" => "visiteur",
            ],
            [
                "name" => "junior",
            ],
            [
                "name" => "senior",
            ]
        ]);

        DB::table('role_user')->insert([
            [
                "role_id" => "1",
                "user_id" => "2"
            ],
            [
                "role_id" => "1",
                "user_id" => "4"
            ],
            [
                "role_id" => "2",
                "user_id" => "2"
            ],
            [
                "role_id" => "2",
                "user_id" => "3"
            ],
        ]);
    }
}
