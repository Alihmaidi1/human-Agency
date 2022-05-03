<?php

namespace Tests\Unit\reason;

use App\Models\reason as ModelsReason;
use Tests\TestCase;
use App\repo\classes\reason;
class storeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_example()
    {

        $reason=new reason();
        $reason=$reason->store("dsdds");
        $this->assertInstanceOf(ModelsReason::class,$reason);
    }
}
