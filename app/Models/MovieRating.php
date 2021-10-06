<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieRating extends Model
{
    use HasFactory;

    protected $fillable = ['movie_rating','movie_id', 'user_id'];   //Se uno di questi campi non lo inserisco ricevo errore
}
