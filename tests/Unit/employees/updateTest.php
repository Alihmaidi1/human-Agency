<?php

namespace Tests\Unit\employees;

use App\Models\employee as ModelsEmployee;
use App\repo\classes\employee;
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
        $employee=new employee();
        $request=new Request();
        $employee2=ModelsEmployee::create([

            "name"=>"zdds",
            "address"=>"dsdsd",
            "age"=>2,
            "salary"=>34,
            "manager_id"=>null,
            "office_id"=>2

        ]);
        $request->id=$employee2->id;
        $request->name="assas";
        $request->address="asa";
        $request->age=2;
        $request->salary=322;
        $request->manager_id=null;
        $request->office_id=2;
        $employee=$employee->update($request);
        $this->assertInstanceOf(ModelsEmployee::class,$employee);
    }
}
