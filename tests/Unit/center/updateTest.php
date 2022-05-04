<?php

namespace Tests\Unit\center;

use App\Models\center as ModelsCenter;
use Tests\TestCase;
use App\repo\classes\center;
class updateTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $center=new center();
        $center1=$center->store("sddsds");
        $center=$center->update($center1->id,"aasas");
        $this->assertInstanceOf(ModelsCenter::class,$center);
    }
}
