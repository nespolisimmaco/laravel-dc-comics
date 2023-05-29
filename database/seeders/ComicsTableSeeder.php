<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_array = config('comics');
         foreach ($comics_array as $comics_item) {
            $comic = new Comic();
            $comic->title = $comics_item['title'];
            $comic->description = $comics_item['description'];
            $comic->image = $comics_item['thumb'];
            $comic->price = $comics_item['price'];
            $comic->series = $comics_item['series'];
            $comic->sale_date = $comics_item['sale_date'];
            $comic->type = $comics_item['type'];
            $comic->save();
         }
    }
}
