<?php

namespace Tests\Unit\nationality;

use Tests\TestCase;
use App\repo\classes\nationality;
use App\Models\nationality as modelsnationality;
class updateTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $nationality1=modelsnationality::create([

            "name"=>"dd"

        ]);
        $nationality=new nationality();
        $nationality=$nationality->update($nationality1->id,"syria");
        $this->assertInstanceOf(modelsnationality::class,$nationality);
    }
}
