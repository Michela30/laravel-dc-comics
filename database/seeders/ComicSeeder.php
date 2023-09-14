<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//models
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');

        Comic::truncate();

        foreach ($comics as $elementComic) {
            $comic = new Comic();

            $comic->title = $elementComic['title'];
            $comic->description = $elementComic['description'];
            $comic->thumb = $elementComic['thumb'];
            $comic->price = $elementComic['price'];
            $comic->series = $elementComic['series'];
            $comic->sale_date = $elementComic['sale_date'];
            $comic->type = $elementComic['type'];
            $comic->artists = implode(', ',$elementComic['artists']);
            $comic->writers = implode(', ',$elementComic['writers']);
            
            $comic->save();
        }
    }
}
