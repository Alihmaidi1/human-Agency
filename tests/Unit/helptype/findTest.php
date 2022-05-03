<?php

namespace Tests\Unit\helptype;

use App\Models\helptype as ModelsHelptype;
use Tests\TestCase;
use App\repo\classes\helptype;
class findTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $helptype=new helptype();
        $helptype1=$helptype->store("dssd");
        $helptype=$helptype->find($helptype1->id);
        $this->assertInstanceOf(ModelsHelptype::class,$helptype);
    }
}
