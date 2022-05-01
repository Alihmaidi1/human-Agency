<?php

namespace Tests\Unit\office;

use App\Models\office as ModelsOffice;
use Tests\TestCase;
use App\repo\classes\office;
class delete extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $office=new office();
        $office1=ModelsOffice::create([

            "name"=>"sss",
            "address"=>"sd"

        ]);
        $office2=$office->delete($office1->id);
        $this->assertTrue($office2);
    }
}
