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
        $books = [
            ["title" => "Harry Potter és a bölcsek köve", "public_date" => "1997-06-26", "pages" => 223],
            ["title" => "Harry Potter és a Titkok kamrája", "public_date" => "1998-07-02", "pages" => 251],
            ["title" => "Harry Potter és az Azkabani fogoly", "public_date" => "1999-07-08", "pages" => 317],
            ["title" => "Harry Potter és a Tűz serlege", "public_date" => "2000-07-08", "pages" => 636],
            ["title" => "Harry Potter és a Főnix rendje", "public_date" => "2003-06-21", "pages" => 766],
            ["title" => "Harry Potter és a Félvér herceg", "public_date" => "2005-07-16", "pages" => 608],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }   
    }
}
