<?php

namespace Tests\Unit\service;

use App\Models\service as ModelsService;
use Tests\TestCase;
use App\repo\classes\service;
class storeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $service=new service();
        $service=$service->store("sdd","dassa");
        $this->assertInstanceOf(ModelsService::class,$service);
    }
}
