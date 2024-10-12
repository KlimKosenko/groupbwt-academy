<?php

namespace Database\Factories;

use App\Models\Product;
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
    protected $model = Product::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'manufacturer_part_number' => strtoupper($this->faker->bothify('MPN-??###??##??##???')),
            'pack_size' => $this->faker->randomElement(['case', 'each']),
            'image' => $this->faker->imageUrl(640, 480, 'product', true),
        ];
    }
}
