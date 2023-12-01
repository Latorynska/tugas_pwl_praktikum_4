<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loans')->insert([
            'user_id' => 1,
            'loan_at' => now(),
            'return_at' => now(),
            'created_at' => now(),
        ]);
        DB::table('loans')->insert([
            'user_id' => 2,
            'loan_at' => now(),
            'return_at' => now(),
            'created_at' => now(),
        ]);
        DB::table('loans')->insert([
            'user_id' => 3,
            'loan_at' => now(),
            'return_at' => now(),
            'created_at' => now(),
        ]);
    }
}
