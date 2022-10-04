<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//creo il model a partire da php artisan make:model Nome -m
//con -m crea la nostra migrazione
class Movie extends Model
{
    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type', 'description'];
}
