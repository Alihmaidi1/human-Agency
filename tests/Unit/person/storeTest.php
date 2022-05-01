<?php

namespace Tests\Unit\person;
use App\repo\classes\person;
use App\Models\person as modelperson;
use Tests\TestCase;
class storeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $person=new person();
        $person1=$person->store("ali",12,"addd");
        $this->assertInstanceOf(modelperson::class,$person1);
    }
}
