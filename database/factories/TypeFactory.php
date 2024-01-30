<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Validation\Rules\Enum;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "type"=> $this->faker->unique()->randomElement(['electronique', 'electromenagie', 'baz', 'vetements', 'alimentation', 'meubles', 'jouets', 'sports', 'beaute', 'livres'])
        ];
    }
}
