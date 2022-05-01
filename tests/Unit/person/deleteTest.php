<?php

namespace Tests\Unit\person;

use Tests\TestCase;
use App\repo\classes\person;
use App\Models\person as modelperson;
class delete extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {


        $person1=modelperson::factory()->create();
        $person=new person();
        $bool=$person->delete($person1->id);
        $this->assertTrue($bool);
    }
}
