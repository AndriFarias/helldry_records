<?php
namespace Database\Factories;

use App\Models\Artista;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name,
            'dt_nascimento' => $this->faker->date,
            'nacionalidade' => $this->faker->country,
            'email' => $this->faker->email,
            'endereco' => $this->faker->address,
            'telefone' => $this->faker->phoneNumber,
        ];
    }
}