<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->userName,
            'password' => $this->faker->password,
            'user_avatar' => $this->faker->imageUrl,
            'role_id' => Role::get()->random()->id,
            'remember_token' => $this->faker->randomKey
        ];
    }
}
