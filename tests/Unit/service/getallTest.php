<?php

namespace Tests\Unit\service;

use App\repo\classes\service;
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

        $service=new service();
        $service=$service->getAllservice()->toArray();

        $this->assertIsArray($service);
    }
}
