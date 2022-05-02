<?php

namespace Tests\Unit\employees;

use App\Models\employee as ModelsEmployee;
use Tests\TestCase;
use App\repo\classes\employee;
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
        $employee=new employee();
        $request=new Request();
        $request->name="ssd";
        $request->address="sdasd";
        $request->age=23;
        $request->salary=34;
        $request->manager_id=null;
        $request->office_id=2;
        $employee=$employee->store($request);
        $this->assertInstanceOf(ModelsEmployee::class,$employee);
    }
}
