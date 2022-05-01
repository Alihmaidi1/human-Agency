<?php

namespace Tests\Unit\personNationality;

use tests\TestCase;
use App\repo\classes\personNationality;

use App\Models\personNationality as modelpersonNationality;
class deleteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {

        $personNationality=modelpersonNationality::factory()->create();
        $personNationality1=personNationality::getinstance();
        $personNationality1=$personNationality1->delete($personNationality->id);
        $this->assertTrue($personNationality1);
    }
}
