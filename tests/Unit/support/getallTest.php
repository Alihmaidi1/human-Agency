<?php

namespace Tests\Unit\support;

use App\repo\classes\support;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
class getallTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $support=new support();
        $support=$support->getAllsupport()->toArray();
        $this->assertIsArray($support);
    }
}
