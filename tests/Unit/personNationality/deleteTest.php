<?php

namespace Tests\Unit\personNationality;

use App\Models\nationality;
use App\Models\person;
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
        $person=person::create(["name"=>"ss","age"=>2,"address"=>"ee"]);
        $nation=nationality::create(["name"=>"d"]);
        $personNationality=modelpersonNationality::create([

            "person_id"=>$person->id,
            "nationality_id"=>$nation->id

        ]);
        $personNationality1=personNationality::getinstance();
        $personNationality1=$personNationality1->delete($personNationality->id);
        $this->assertTrue($personNationality1);
    }
}
