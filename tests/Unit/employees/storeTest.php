<?php

namespace Tests\Unit\employees;

use App\Models\employee as ModelsEmployee;
use Tests\TestCase;
use App\repo\classes\employee;
use App\repo\classes\office;
use Illuminate\Support\Facades\Request;

class storeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $office=new office();
        $request=new Request();
        $request->name="sddsa";
        $request->address="sddas";
        $office=$office->store($request);
        $employee=new employee();
        $request=new Request();
        $request->name="ssd";
        $request->address="sdasd";
        $request->age=23;
        $request->salary=34;
        $request->manager_id=null;
        $request->office_id=$office->id;
        $employee=$employee->store($request);
        $this->assertInstanceOf(ModelsEmployee::class,$employee);
    }
}
