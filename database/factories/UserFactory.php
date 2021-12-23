<?php

namespace Database\Factories;

use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => Uuid::uuid4()->getHex(),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'is_user' => 'false',
            'is_admin_zona' => 'false',
            'is_admin' => 'false',
            'is_super_admin' => 'false',
            'zona' => $this->faker->randomElement(['Pelaihari I', 'Bati-Bati', 'Takisung', 'Pelaihari II', 'Kurau', 'Panyipatan', 'Bajuin', 'Bumi Makmur', 'Jorong', 'Tambang Ulang', 'Batu Ampar', 'Kintap']),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
