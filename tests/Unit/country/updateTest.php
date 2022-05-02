<?php

namespace Tests\Unit\country;

use App\Models\country as ModelsCountry;
use Tests\TestCase;
use App\repo\classes\country;
class updateTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {

        $country=new country();
        $country1=$country->store("ddd");
        $country=$country->update($country1->id,"ddf");
        $this->assertInstanceOf(ModelsCountry::class,$country);
    }
}
