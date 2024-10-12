<?php

namespace Database\Factories;

use App\Models\Retailer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Retailer>
 */
class RetailerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Retailer::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'url' => $this->faker->url(),
            'currency' => $this->faker->currencyCode(),
            'logo' => $this->faker->imageUrl(640, 480, 'logo', true),
            'is_active' => $this->faker->boolean(80)
        ];
    }
}
