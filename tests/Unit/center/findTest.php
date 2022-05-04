<?php

namespace Tests\Unit\center;

use App\Models\center as ModelsCenter;
use Tests\TestCase;
use App\repo\classes\center;
class findTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $center=new center();
        $center1=$center->store("dsds");
        $center=$center->find($center1->id);
        $this->assertInstanceOf(ModelsCenter::class,$center);
    }
}
