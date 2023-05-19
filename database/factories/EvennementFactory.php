<?php
namespace Database\Factories;

use App\Models\User;
use App\Models\Evenement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evenement>
 */
class EvennementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * 
     */
    protected $model = evennements::class;

    public function definition()
    {
        return [
           
            'Nom_Evenement' => $this->faker->sentence(),
            'description' => $this->faker->text(),
            'Email' => $this->faker->text(),
            'Nom_club' => $this->faker->text(),
            'date' => now(),
            'id' => evennements::all()->random()->id,
            'created_at' => now(),
           
        ];
    }
}