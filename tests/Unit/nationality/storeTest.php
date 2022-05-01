<?php

namespace Tests\Unit\nationality;
use Tests\TestCase;
use App\Models\nationality as modelnationality;
use App\repo\classes\nationality;
class storeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $nationality=new nationality();
        $nationality=$nationality->store("syria");
        $this->assertInstanceOf(modelnationality::class,$nationality);
    }
}
