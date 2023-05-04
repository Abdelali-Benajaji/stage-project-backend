<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;
    public function definition(): array
    {
          return [
                'image' => $this->faker->imageUrl(),
                'nom' => $this->faker->name,
                'email' => $this->faker->email,
                'role' => $this->faker->randomElement(['admin', 'user']),
                'created_at' => $this->faker->dateTimeBetween('2023-05-01', '2023-05-31'),
            ];
        }
    
}
