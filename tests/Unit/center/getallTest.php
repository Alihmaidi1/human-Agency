<?php

namespace Tests\Unit\center;

use Tests\TestCase;
use App\repo\classes\center;
use Illuminate\Foundation\Testing\RefreshDatabase;

class getallTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $centers=new center();
        $centers=$centers->getallcenter()->toArray();
        $this->assertIsArray($centers);
    }
}
