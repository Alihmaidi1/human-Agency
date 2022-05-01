<?php

namespace Database\Factories;
use App\Models\person;
use App\Models\nationality;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\personNationality>
 */
class personNationalityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public $model=\App\Models\personNationality::class;
    public function definition()
    {
        return [

            "person_id"=>person::all()->random()->id,
            "nationality_id"=>nationality::all()->random()->id

        ];
    }
}
