<?php

namespace App\repo\classes;
use App\Models\nationality as modelnationality;
use App\repo\interfaces\nationality as InterfacesNationality;

class nationality implements InterfacesNationality{



    public function getAllNationality(){

        return modelnationality::all()->toArray();
    }

    public function store($name){

        $nationality=new modelnationality();
        $nationality->name=$name;
        $nationality->save();
        return $nationality;

    }

    public function update($id,$name){

        $nationality=modelnationality::find($id);
        $nationality->name=$name;
        $nationality->save();
        return $nationality;



    }



    public function delete($id){

        return modelnationality::find($id)->delete();

    }

}
