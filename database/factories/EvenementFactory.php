<?php

namespace Database\Factories;

use App\Models\User;

use App\Models\Evenement;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvenementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Evenement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nom_Evenement' => $this->faker->sentence(5),
            'description' => $this->faker->text,
            'date' => now(),
            'Nom_club'=> $this->faker->sentence(5),
            'user_id' => User::all()->random()->id,
            'publish' => $this->faker->randomElement([0,1]),
            'Email'=> $this->faker->email,
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