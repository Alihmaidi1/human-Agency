<?php

namespace Tests\Unit\service;

use App\Models\service as ModelsService;
use Tests\TestCase;
use App\repo\classes\service;
class findTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {

        $service=new service();
        $service1=$service->store("dssd","sds");
        $service=$service->find($service1->id);
        $this->assertInstanceOf(ModelsService::class,$service);
    }
}
