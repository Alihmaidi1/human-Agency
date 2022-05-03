<?php

namespace Tests\Unit\support;

use App\Models\support as ModelsSupport;
use Tests\TestCase;
use App\repo\classes\support;
class findTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $support=new support();
        $support1=$support->store("sss");
        $support=$support->find($support1->id);
        $this->assertInstanceOf(ModelsSupport::class,$support);
    }
}
