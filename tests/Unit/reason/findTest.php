<?php

namespace Tests\Unit\reason;

use App\Models\reason as ModelsReason;
use Tests\TestCase;
use App\repo\classes\reason;
class findTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $reason=new reason();
        $reason1=$reason->store("assd");
        $reason=$reason->find($reason1->id);
        $this->assertInstanceOf(ModelsReason::class,$reason);
    }
}
