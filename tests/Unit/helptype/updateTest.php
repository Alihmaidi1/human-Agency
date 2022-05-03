<?php

namespace Tests\Unit\helptype;

use App\Models\helptype as ModelsHelptype;
use Tests\TestCase;
use App\repo\classes\helptype;
class updateTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $helptype=new helptype();
        $helptype1=$helptype->store("sdsd");
        $helptype=$helptype->update($helptype1->id,"sdasaddd");
        $this->assertInstanceOf(ModelsHelptype::class,$helptype);
    }
}
