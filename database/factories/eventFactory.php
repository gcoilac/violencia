<?php

namespace Database\Factories;

use App\Models\event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\event>
 */
class eventFactory extends Factory
{
    protected $model = event::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->userName(),
            'fecha_init' => $this->faker->date(),
            'fecha_end' => $this->faker->date(),
            'location' => $this->faker->locale(),
            'tipo' => $this->faker->randomElement(['exposicion', 'reunion', 'congreso', 'compartimiento']),
            'activated' => $this->faker->randomElement(['on', null]),
            'description' => $this->faker->paragraph()
        ];
    }
}
