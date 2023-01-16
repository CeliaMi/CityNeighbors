<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Specie>
 */
class SpecieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'individuals' =>$this-> faker->numberBetween($int1 = 0, $int2 = 600),
            'description' =>$this-> faker->realText(),
            'areas' =>$this-> faker->country(),
            'img' => $this->faker->imageUrl(),
    
        ];
    }
}
