<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 60);
            $table->text('description');
            $table->string('thumb', 255);
            $table->decimal('price', 4, 2);
            $table->string('series', 50);
            $table->date('sale_date');
            $table->string('type', 20);
            $table->timestamps();
        });//creo la tabella nel mio DB con il nome delle colonne, poi lancio le migratiion
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
