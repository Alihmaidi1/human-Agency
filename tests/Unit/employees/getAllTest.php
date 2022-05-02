<?php

namespace Tests\Unit\employees;

use Tests\TestCase;
use App\repo\classes\employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
class getAllTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {

        $employee=new employee();
        $employee=$employee->getAllemployee();

        $this->assertIsArray($employee);
    }
}
