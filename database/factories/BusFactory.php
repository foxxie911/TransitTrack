<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bus>
 */
class BusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'plate_no' => fake()->regexify('DHK-BA [1-9]{2}-[1-9]{4}'),
            'company_id' => Company::factory(),
            'latitude' => fake()->randomFloat(6, 23.695676, 23.875258),
            'longitude' => fake()->randomFloat(6, 90.465350, 90.368522),
        ];
    }    
}
