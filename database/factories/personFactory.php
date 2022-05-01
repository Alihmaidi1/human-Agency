<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\person>
 */
class personFactory extends Factory
{

    protected $model=\App\Models\person::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            "name"=>$this->faker->name(),
            "age"=>$this->faker->numberBetween(10,24),
            "address"=>$this->faker->address()
        ];
    }
}
