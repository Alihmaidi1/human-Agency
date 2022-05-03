<?php

namespace Tests\Unit\reason;

use Tests\TestCase;
use App\repo\classes\reason;
use Illuminate\Foundation\Testing\RefreshDatabase;

class getAllTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $reasons=new reason();
        $reasons=$reasons->getAllReason()->toArray();
        $this->assertIsArray($reasons);
    }
}
