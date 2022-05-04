<?php

namespace Tests\Unit\center;

use App\Models\center as ModelsCenter;
use Tests\TestCase;
use App\repo\classes\center;
class storeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $center=new center();
        $center=$center->store("dssdsd");
        $this->assertInstanceOf(ModelsCenter::class,$center);
    }
}
