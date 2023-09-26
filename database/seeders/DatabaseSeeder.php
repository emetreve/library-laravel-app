<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $quantity = 5;

        $authors = Author::factory($quantity)->create();

        $books = Book::factory($quantity)->create();

        foreach ($authors as $key => $author) {
            $author->books()->attach($books[$key]->id);
        }
    }
}
