<?php

namespace Database\Seeders;

use App\Models\User;

class DatabaseSeeder extends DatabaseSeeder
{
    public function run()
    {
        // Create a user with specific data
        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('secret-password'),
        ]);

        // Create additional users using the factory
        User::factory(10)->create();
    }
}

