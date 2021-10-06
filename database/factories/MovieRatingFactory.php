<?php

namespace Database\Factories;

use App\Models\MovieRating;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieRatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MovieRating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'movie_rating' => $this->faker->numberBetween(1,5),
            'movie_id' => $this->faker->numberBetween(1,100000),
            'user_id' => $this->faker->numberBetween(1,10000000),
        ];
    }
}
