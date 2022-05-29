<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Encuesta>
 */
class EncuestaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'emailParticipante' => $this->faker->unique()->safeEmail(),
            'idrangosEdad' => $this->faker->numberBetween($min = 1, $max = 4),
            'sexo' => $this->faker->randomElement(['Hombre', 'Mujer']),
            'redSocialFavorita' => $this->faker->randomElement(['Facebook', 'WhatsApp', 'Twitter', 'Instagram', 'Tiktok']),
            'tiempoFacebook' => $this->faker->date('H:i:s', rand(1200, 18000)),
            'tiempoWhatsApp' => $this->faker->date('H:i:s', rand(1200, 18000)),
            'tiempoTwitter' => $this->faker->date('H:i:s', rand(1200, 18000)),
            'tiempoInstagram' => $this->faker->date('H:i:s', rand(1200, 18000)),
            'tiempoTiktok' => $this->faker->date('H:i:s', rand(1200, 18000)),
        ];
    }
}
