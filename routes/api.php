<?php

use App\Http\Controllers\MovieRatingController;
use App\Models\MovieRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('rating/{id}', 'user_id');

//Route che richiama le funzioni CRUD, craa nuovo rating, visualizza tutti, aggiorna rating e cancella rating
Route::apiResource('/movie_ratings', MovieRatingController::class);

//Ricerca rating film in base all'id del film passato
Route::get('/rating/movie_id/{movieId}',[MovieRatingController::class, 'getMovieRatingsByMovieId']);

//Ricerca rating film in base all'id del'utente passato
Route::get('/rating/user_id/{userId}',[MovieRatingController::class, 'getMovieRatingsByUserId']);

//Ricerca rating film in base all'id del'utente e all'id del film passato
Route::get('/rating/user_id/{userId}/movie_id/{movieId}',[MovieRatingController::class, 'getMovieRatingsByUserIdAndMovieId']);
