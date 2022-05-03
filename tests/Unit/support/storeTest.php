<?php

namespace Tests\Unit\support;

use App\Models\support as ModelsSupport;
use Tests\TestCase;
use App\repo\classes\support;
class storeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $support=new support();
        $support=$support->store("sdds");
        $this->assertInstanceOf(ModelsSupport::class,$support);
    }
}
