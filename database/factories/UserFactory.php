<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->randomNumber(9),
            'name' => $this->faker->name(),
            'gwa' => $this->faker->randomElement(['1.0', '1.25', '1.50', '2.0']),
            'course' => $this->faker->randomElement(['BSCS', 'BSIT', 'BSCE', 'BSM', 'BSSC']),
            'college' => $this->faker->randomElement(['CAS', 'COE', 'CTE', 'CBEA', 'CHS', 'CAFSD']),
            'sex' => $this->faker->randomElement(['Male', 'Female']),
            'year_level' => $this->faker->randomElement(['1', '2', '3', '4']),
            'address' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
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
