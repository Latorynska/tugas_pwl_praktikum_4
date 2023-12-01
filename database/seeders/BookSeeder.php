<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'title' => 'Judul Buku A',
            'author' => 'Pengarang A',
            'year' => 2023,
            'publisher' => 'Publisher A',
            'city' => 'Kota A',
            'cover' => 'https://cover.buku.a',
            'bookshelf_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('books')->insert([
            'title' => 'Judul Buku B',
            'author' => 'Pengarang B',
            'year' => 2077,
            'publisher' => 'Publisher B',
            'city' => 'Kota B',
            'cover' => 'https://cover.buku.b',
            'bookshelf_id' => 2,
            'created_at' => now(),
        ]);
    }
}
