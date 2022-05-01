<?php
namespace App\repo\classes;
use App\Models\person as personModel;
use App\repo\interfaces\person as InterfacesPerson;

class person implements InterfacesPerson
{

    public function getAllPerson(){

        return personModel::all()->toArray();

    }

    public function store($name,$age,$address){
        $person=new personModel();
        $person->name=$name;
        $person->age=$age;
        $person->address=$address;
        return $person;
    }

    public function find($id){

        return personModel::find($id);
    }
    public function update($id,$name,$age,$address){

        $person=personModel::find($id);
        $person->name=$name;
        $person->age=$age;
        $person->address=$address;
        return $person;

    }

    public function delete($id){

        $person=personModel::find($id);

        return $person->delete();

    }

}
