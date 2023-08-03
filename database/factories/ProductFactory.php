<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productName = fake()->words(3, true);

        return [
            'name' => $productName,
            'slug' => Str::slug($productName, '-'),
            'description' => fake()->text($maxNbChars = 200),
            'qty' => fake()->randomNumber(2),
            'featured' => fake()->boolean($chanceOfGettingTrue = 70),
            'is_visible' => true,
            'price' => fake()->randomNumber(3),
            'published_at' => now(),
            'sub_category_id' => fake()->numberBetween($min = 1, $max = 4)
        ];
    }
}
