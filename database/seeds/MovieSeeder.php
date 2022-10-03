<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = config('comics');
        
        foreach($movies as $movie){
            $newMovie = new Movie();
            $newMovie->title = $movie['title'];
            $newMovie->description = $movie['description'];
            $newMovie->thumb = $movie['thumb'];
            $newMovie->price = $movie['price'];
            $newMovie->series = $movie['series'];
            $newMovie->sale_date = $movie['sale_date'];
            $newMovie->type = $movie['type'];
            $newMovie->save();
        }
    }
}
