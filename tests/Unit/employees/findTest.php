<?php

namespace Tests\Unit\employees;

use App\Models\employee as ModelsEmployee;
use Tests\TestCase;
use App\repo\classes\employee;

class findTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $employee=new employee();
        $employee=$employee->find(1);
        $this->assertInstanceOf(ModelsEmployee::class,$employee);
    }
}
