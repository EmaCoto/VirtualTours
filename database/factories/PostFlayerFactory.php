<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostFlayer>
 */
class PostFlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'duration' => $this->faker->numberBetween(1, 10) . ' hours',
            'prices' => $this->faker->paragraph,
            'img' => $this->faker->imageUrl(640, 480, 'business') // Genera una URL de imagen de 640x480
        ];
    }
}
