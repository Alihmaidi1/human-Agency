<?php

namespace Tests\Unit\personNationality;

use App\repo\classes\nationality;
use App\repo\classes\person;
use tests\TestCase;
use App\repo\classes\personNationality;
class getAllTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {

        $personNationality=personNationality::getinstance();
        $array=$personNationality->getAllPersonNationality();
        $this->assertIsArray($array);

    }
}
