<?php

namespace Tests\Unit\employees;

use App\Models\employee as ModelsEmployee;
use Tests\TestCase;
use App\repo\classes\employee;
use App\repo\classes\office;
use Illuminate\Http\Request;

class findTest extends TestCase
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
        $request=new  Request();
        $request->name="sad";
        $request->address='sddssd';
        $request->age=3;
        $request->salary=34;
        $request->manager_id=null;
        $request->office_id=$office->id;
        $employee1=$employee->store($request);
        $employee=$employee->find($employee1->id);
        $this->assertInstanceOf(ModelsEmployee::class,$employee);
    }
}
