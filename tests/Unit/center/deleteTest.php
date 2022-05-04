<?php

namespace Tests\Unit\center;

use Tests\TestCase;
use App\repo\classes\center;
class deleteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {

        $center=new center();
        $center1=$center->store("sdsdsd");
        $center=$center->delete($center1->id);
        $this->assertTrue($center);
    }
}
