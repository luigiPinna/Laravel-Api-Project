<?php

namespace App\Http\Controllers;

use App\Http\Resources\MovieRatingCollection;
use App\Http\Resources\MovieRatingResource;
use App\Models\MovieRating;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MovieRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return new MovieRatingCollection(MovieRating::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movieRating = MovieRating::create($request-> only('movie_rating','movie_id', 'user_id'));
        return new MovieRatingResource($movieRating);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MovieRating  $movieRating
     * @return \Illuminate\Http\Response
     */
    public function show(MovieRating $movieRating)
    {
        return new MovieRatingResource($movieRating);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MovieRating  $movieRating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MovieRating $movieRating)
    {
        //modifica rating
        $movieRating->update($request->only('movie_rating','movie_id', 'user_id'));
        //restituzione rating modificata
        return new MovieRatingResource($movieRating);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MovieRating  $movieRating
     * @return \Illuminate\Http\Response
     */
    public function destroy(MovieRating $movieRating)
    {
        $movieRating->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

    public function getMovieRatingsByMovieId(MovieRating $movieId){

        $movieRating = MovieRating::where('movie_id', $movieId)->get();

        return new MovieRatingResource($movieRating);
    }

    public function getMovieRatingsByUserId(MovieRating $userId){

        $movieRating = MovieRating::where('movie_id', $userId)->get();

        return new MovieRatingResource($movieRating);
    }

    public function getMovieRatingsByUserIdAndMovieId(MovieRating $userId, MovieRating $movieId){

        $movieRating = MovieRating::where('movie_id', $userId)->where('movie_id', $movieId)->get();

        return new MovieRatingResource($movieRating);
    }
    /*
    -
getMovieRatingsByMovieId
-
getMovieRatingsByUserId
-
<getMovieRatingsByUserIdAndMovieId

*/

}
