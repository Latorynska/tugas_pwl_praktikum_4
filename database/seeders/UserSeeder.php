<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'username1',
            'name' => 'User A',
            'email' => 'usera@mail.com',
            'password' => 'usera123',
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'username' => 'username2',
            'name' => 'User B',
            'email' => 'userb@mail.com',
            'password' => 'userb123',
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'username' => 'username3',
            'name' => 'User C',
            'email' => 'userc@mail.com',
            'password' => 'userc123',
            'created_at' => now(),
        ]);
    }
}
