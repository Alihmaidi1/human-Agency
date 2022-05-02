<?php

namespace Tests\Unit\country;

use Tests\TestCase;
use App\repo\classes\country;
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
        $country=new country();
        $country=$country->getAllcountry()->toArray();
        $this->assertIsArray($country);
    }
}
