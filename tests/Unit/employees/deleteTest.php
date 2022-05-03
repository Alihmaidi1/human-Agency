<?php

namespace Tests\Unit\employees;

use Illuminate\Support\Facades\Request;
use Tests\TestCase;
use App\repo\classes\employee;
use App\repo\classes\office;

class deleteTest extends TestCase
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
        $request=new Request();
        $request->name="sad";
        $request->address='sddssd';
        $request->age=3;
        $request->salary=34;
        $request->manager_id=null;
        $request->office_id=$office->id;
        $employee=new employee();
        $employee1=$employee->store($request);
        $employee=$employee->delete($employee1->id);
        $this->assertTrue($employee);
    }
}
