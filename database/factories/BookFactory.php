<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->company,
            'author_name' => $this->faker->name,
            'price' => $this->faker->randomNumber(3),
            'quantity' => $this->faker->randomNumber(2),
            'description'=>$this->faker->paragraph,
           'category_id'=> Category::inRandomOrder()->first()->id

        ];
    }
}
