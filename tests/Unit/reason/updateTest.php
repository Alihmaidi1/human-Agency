<?php

namespace Tests\Unit\reason;

use App\Models\reason as ModelsReason;
use Tests\TestCase;
use App\repo\classes\reason;
class updateTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $reason=new reason();
        $reason1=$reason->store("dds");
        $reason=$reason->update($reason1->id,"sdsdss");
        $this->assertInstanceOf(ModelsReason::class,$reason);
    }
}
