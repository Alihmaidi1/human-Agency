<?php

namespace Tests\Unit\country;

use Tests\TestCase;
use App\repo\classes\country;
class deleteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {

        $country=new country();
        $country1=$country->store("sdsdd");
        $country=$country->delete($country1->id);
        $this->assertTrue($country);
    }
}
