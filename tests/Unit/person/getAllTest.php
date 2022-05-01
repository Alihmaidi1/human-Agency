<?php

namespace Tests\Unit\person;

use Tests\TestCase;
use App\repo\classes\person;
class getAllTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {

        $array=new person();
        $array=$array->getAllPerson();
        $this->assertIsArray($array);

    }
}
