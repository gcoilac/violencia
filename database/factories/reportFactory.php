<?php

namespace Database\Factories;

use App\Models\report;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\report>
 */
class reportFactory extends Factory
{
    protected $model = report::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'participacion' => $this->faker->randomElement(['victima', 'testigo', 'agresor']),
            'name' => $this->faker->userName(),
            'apellido' => $this->faker->lastName(),
            'fecha_nac' => $this->faker->date(),
            'edad' => $this->faker->biasedNumberBetween($min = 6, $max = 100),
            'estado_civil' => $this->faker->randomElement(['casado/a', 'soltero/a', 'divorciado/a']),
            'nro_contacto' => $this->faker->phoneNumber(),
            'natural_de' => $this->faker->locale(),
            'domicilio' => $this->faker->paragraph(),
            'email' => $this->faker->email(),
            'tipo' => $this->faker->randomElement(['genero', 'intrafamiliar', 'bullying']),
            'declaracion' => $this->faker->paragraph()
        ];
    }
}
