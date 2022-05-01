<?php
namespace Tests\Unit\person;
use Tests\TestCase;
use App\repo\classes\person;
use App\Models\person as modelperson;
class updateTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $person=new person();
        $person1=modelperson::create([

            "name"=>"dds",
            "age"=>23,
            "address"=>"adds"

        ]);
        $person2=$person->update($person1->id,"sss",12,"sdds");
        $this->assertInstanceOf(modelperson::class,$person2);
    }
}
