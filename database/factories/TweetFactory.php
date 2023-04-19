<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tweet>
 */
class TweetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'title' => fake()->name(),
            'user_id' => 2,
            'tags' => 'latins, asdsafk, dsakfl',
            'description' => 'asfldkjklsaj dfalksj lfkjal jfa;slkdjf ljaf l;skaj flksj l;asj flksj a;lj flk', // password
        ];
    }
}
