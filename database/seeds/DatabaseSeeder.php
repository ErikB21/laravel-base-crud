<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MovieSeeder::class);
    }
    //decommento il risultato del mio metodo
    //per poter lanciare php artisa db:seed
    //senza lanciarlo inserendo anche il nome del Seeder
    //cosi facendo DBSeeder chiama con call() il seeder
    //MovieSeeder e cosi viene lanciato(quindi solo 
    //usato per migliorare velocità e sprecare meno tempo)
}
