<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory{
    protected $model = Product::class;

     /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array {
        return [
            'name' => $this->faker->words(3, true),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'stock' => $this->faker->numberBetween(0, 100),
        ];
    }
}