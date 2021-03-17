<?php

namespace Database\Seeders;

use \App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (app()->environment('production')) {
            User::create([
                'name' => "Administrator",
                'email' => "admin@example.com",
                'email_verified_at' => now(),
                'password' => bcrypt("changeme"),
            ]);
        } else {
            User::create([
                'name' => "Administrator",
                'email' => "admin@example.com",
                'email_verified_at' => now(),
                'password' => bcrypt("password"),
            ]);

            User::factory(10)->create();
        }
    }
}
