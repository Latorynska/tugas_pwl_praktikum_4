<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelves')->insert([
            'code' => 'R001',
            'name' => 'Rak Buku A',
        ]);
        DB::table('bookshelves')->insert([
            'code' => 'R002',
            'name' => 'Rak Buku B',
        ]);
        DB::table('bookshelves')->insert([
            'code' => 'R003',
            'name' => 'Rak Buku C',
        ]);
    }
}
