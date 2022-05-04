<?php

namespace Tests\Unit\service;

use Tests\TestCase;
use App\repo\classes\service;
class deleteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {

        $service=new service();
        $service1=$service->store("sdsd","da");
        $service=$service->delete($service1->id);
        $this->assertTrue($service);
    }
}
