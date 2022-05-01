<?php

namespace Tests\Unit\nationality;

use Tests\TestCase;
use App\Models\nationality as modelnationality;
use App\repo\classes\nationality;
class deleteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {

        $nationality1=modelnationality::factory()->create();
        $nationality=new nationality();
        $nationality=$nationality->delete($nationality1->id);
        $this->assertTrue($nationality);
    }
}
