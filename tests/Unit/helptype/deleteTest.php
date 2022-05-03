<?php

namespace Tests\Unit\helptype;

use Tests\TestCase;
use App\repo\classes\helptype;
class deleteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $helptype=new helptype();
        $helptype1=$helptype->store("sdsdsd");
        $helptype=$helptype->delete($helptype1->id);
        $this->assertTrue($helptype);
    }
}
