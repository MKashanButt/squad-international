<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\reviews;

class ReviewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reviews::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'client_name' => $this->faker->regexify('[A-Za-z0-9]{40}'),
            'stars' => $this->faker->regexify('[A-Za-z0-9]{1}'),
            'reviews' => $this->faker->text(),
        ];
    }
}
