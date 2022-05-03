<?php

namespace Tests\Unit\employees;

use App\Models\employee as ModelsEmployee;
use App\repo\classes\employee;
use App\repo\classes\office;
use Illuminate\Support\Facades\Request;
use Tests\TestCase;
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
        $request=new Request();
        $request->name="sddsa";
        $request->address="sddas";
        $office=$office->store($request);

        $employee=new employee();
        $request=new Request();
        $request->name="assas";
        $request->address="asa";
        $request->age=2;
        $request->salary=322;
        $request->manager_id=null;
        $request->office_id=$office->id;
        $employee2=$employee->store($request);

        $request=new Request();
        $request->id=$employee2->id;
        $request->name="assas";
        $request->address="asa";
        $request->age=2;
        $request->salary=322;
        $request->manager_id=null;
        $request->office_id=$office->id;
        $employee=$employee->update($request);
        $this->assertInstanceOf(ModelsEmployee::class,$employee);
    }
}
