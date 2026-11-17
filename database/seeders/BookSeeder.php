<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            "title" => "The Stranger",
            "writer" => "Albert Camus",
            "published_year" => 1942,
            "cover_path" => "images/thestranger.jpg"
        ]);
    }
}
