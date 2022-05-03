<?php

namespace Tests\Unit\reason;

use Tests\TestCase;
use App\repo\classes\reason;
class deleteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $reason=new reason();
        $reason1=$reason->store("sddfs");
        $reason=$reason->delete($reason1->id);
        $this->assertTrue($reason);
    }
}
