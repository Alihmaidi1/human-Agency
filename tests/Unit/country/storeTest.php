<?php

namespace Tests\Unit\country;

use App\Models\country as ModelsCountry;
use Tests\TestCase;
use App\repo\classes\country;
class storeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $country=new country();
        $country=$country->store("ssdd");
        $this->assertInstanceOf(ModelsCountry::class,$country);
    }
}
