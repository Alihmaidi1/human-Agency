<?php

namespace Tests\Unit\office;

use tests\TestCase;
use App\repo\classes\office;
class getAllTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {

        $office=new office();
        $office=$office->getAlloffices();
        $this->assertIsArray($office);
    }
}
