<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'father_name'=> $this->faker->firstName,
            'user_id' => User::get()->random()->id,
            'birth_date' => $this->faker->date,
            'passport' => random_int(1000000000, 9999999999),
            'phone'=> $this->faker->phoneNumber
        ];
    }
}
