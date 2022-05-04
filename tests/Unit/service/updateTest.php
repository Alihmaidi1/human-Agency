<?php

namespace Tests\Unit\service;

use App\Models\service as ModelsService;
use Tests\TestCase;
use App\repo\classes\service;
class updateTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $service=new service();
        $service1=$service->store("dassdsd","aas");
        $service=$service->update($service1->id,"sad","asdaf");
        $this->assertInstanceOf(ModelsService::class,$service);
    }
}
