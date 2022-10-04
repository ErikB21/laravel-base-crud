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
    {   //creo il seeder --> php artisan make:seeder NomeSeeder
        //questo metodo popolerà la mia tabella, quindi creiamo un ciclo:
        $movies = config('comics');//richiamo file config
        
        foreach($movies as $movie){//ciclo quelle che saranno le mie righe
            $newMovie = new Movie();//creo un'istanza dal model
            $newMovie->title = $movie['title'];
            $newMovie->description = $movie['description'];
            $newMovie->thumb = $movie['thumb'];
            $newMovie->price = $movie['price'];
            $newMovie->series = $movie['series'];
            $newMovie->sale_date = $movie['sale_date'];
            $newMovie->type = $movie['type'];
            $newMovie->save();//creo il salvataggio per il DB
        }
    }
}
