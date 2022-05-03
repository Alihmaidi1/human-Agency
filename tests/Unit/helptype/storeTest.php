<?php

namespace Tests\Unit\helptype;

use App\Models\helptype as ModelsHelptype;
use Tests\TestCase;
use App\repo\classes\helptype;
class storeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $helptype=new helptype();
        $helptype=$helptype->store("dsdds");
        $this->assertInstanceOf(ModelsHelptype::class,$helptype);
    }
}
