<?php

namespace Tests\Unit\employees;

use Illuminate\Support\Facades\Request;
use Tests\TestCase;
use App\repo\classes\employee;
class deleteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $request=new Request();
        $request->name="sad";
        $request->address='sddssd';
        $request->age=3;
        $request->salary=34;
        $request->manager_id=null;
        $request->office_id=2;
        $employee=new employee();
        $employee1=$employee->store($request);
        $employee=$employee->delete($employee1->id);
        $this->assertTrue($employee);
    }
}
