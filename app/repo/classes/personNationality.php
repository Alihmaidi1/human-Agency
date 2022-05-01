<?php
namespace App\repo\classes;
use App\Models\personNationality as ModelspersonNationality;
use App\repo\classes\person;
use App\repo\classes\nationality;
class personNationality
{

    public $person;
    public $nationality;

    public function __construct(person $person,nationality $nationality)
    {

        $this->person=$person;
        $this->nationality=$nationality;

    }
    public static function getinstance(){

        return new personNationality(new person(),new nationality());
    }
    public function getAllPersonNationality()
    {
        return ModelspersonNationality::all()->toArray();
    }


    public function store($request){
        $person=$this->person->store($request->person_name,$request->age,$request->address);
        $nationality=$this->nationality->store($request->nationality_name);
        $personNationality=new ModelspersonNationality();
        $personNationality->person_id=$person->id;
        $personNationality->nationality_id=$nationality;
        $personNationality->save();
        return $personNationality;

    }

    public function update($request){

        $personNationality=ModelspersonNationality::find($request->id);
        $this->createperson->delete($personNationality->person_id);
        $this->nationality->delete($personNationality->nationality_id);
        $person=$this->person->store($request->person_name,$request->age,$request->address);
        $nationality=$this->nationality->store($request->nationality_name);
        $personNationality->person_id=$person->id;
        $personNationality->nationality_id=$nationality->id;
        $personNationality->save();
        return $personNationality;
    }


    public function delete($id){

        return ModelspersonNationality::find($id)->delete();

    }



}
