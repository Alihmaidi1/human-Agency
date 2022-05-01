<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\nationality>
 */
class nationalityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public $model=\App\Models\nationality::class;
    public function definition()
    {
        return [

            "name"=>$this->faker->country()

        ];
    }
}
