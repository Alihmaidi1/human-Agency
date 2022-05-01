<?php

namespace Tests\Unit\nationality;
use App\repo\classes\nationality;
use Tests\TestCase;
class getAllTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $array=new nationality();
        $array=$array->getAllNationality();
        $this->assertIsArray($array);
    }
}
