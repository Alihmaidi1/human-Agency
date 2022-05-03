<?php

namespace Tests\Unit\support;

use Tests\TestCase;
use App\repo\classes\support;
class deleteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $support=new support();
        $support1=$support->store("dddd");
        $support=$support->delete($support1->id);
        $this->assertTrue($support);
    }
}
