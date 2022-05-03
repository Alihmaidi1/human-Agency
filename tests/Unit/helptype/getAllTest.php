<?php

namespace Tests\Unit\helptype;

use Tests\TestCase;
use App\repo\classes\helptype;
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

        $helptype=new helptype();
        $helptypes=$helptype->getAllHelptype()->toArray();
        $this->assertIsArray($helptypes);
    }
}
