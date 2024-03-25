<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);

        $users = [
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Hash the password
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Hash the password
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Moe',
                'email' => 'jane@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Hash the password
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'John moe',
                'email' => 'jane@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Hash the password
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jodie Doe',
                'email' => 'jane@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Hash the password
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'James Doe',
                'email' => 'jane@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Hash the password
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jack Doe',
                'email' => 'jane@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Hash the password
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jack Moe',
                'email' => 'jane@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Hash the password
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jack Foe',
                'email' => 'jane@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Hash the password
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more users as needed
        ];

        DB::table('users')->insert($users);
    }
}
