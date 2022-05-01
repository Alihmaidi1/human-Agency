<?php

namespace Tests\Unit\office;

use App\Models\office as ModelsOffice;
use Illuminate\Support\Facades\Request;
use Tests\TestCase;
use App\repo\classes\office;
class storeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $request=new Request();
        $request->name="ssd";
        $request->address="ss";
        $office=new office();
        $office=$office->store($request);
        $this->assertInstanceOf(ModelsOffice::class,$office);
    }
}
