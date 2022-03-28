<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class DentistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $countries_id = DB::table('countries')->select('id')->get();

        return [
            'name' => $this->faker->name,
            'surname' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['male', 'female', 'non binary']),
            'email' => $this->faker->unique()->safeEmail(),
            'country_id' => $this->faker->randomElement($countries_id)->id

        ];
    }
}
