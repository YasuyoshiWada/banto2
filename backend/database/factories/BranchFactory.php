<?php

namespace Database\Factories;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\Factory;

class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'status' => $this->faker->randomElement(['active','inactive']),
            'branch_name' => $this->faker->name(),
            'address' => $this->faker->address(),
        ];
    }
}
