<?php

namespace Tests\Unit\support;

use App\Models\support as ModelsSupport;
use Tests\TestCase;
use App\repo\classes\support;
class updateTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $support=new support();
        $support1=$support->store("dsdsd");
        $support=$support->update($support1->id,"dsdsd");
        $this->assertInstanceOf(ModelsSupport::class,$support);
    }
}
