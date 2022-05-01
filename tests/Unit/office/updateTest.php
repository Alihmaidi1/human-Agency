<?php

namespace Tests\Unit\office;

use App\Models\office as ModelsOffice;
use tests\TestCase;
use App\repo\classes\office;
class updateTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $office=new office();
        $request=ModelsOffice::create([

            "name"=>"ss",
            "address"=>"sdd"
        ]);
        $office=$office->update($request);
        $this->assertInstanceOf(ModelsOffice::class,$office);
    }
}
