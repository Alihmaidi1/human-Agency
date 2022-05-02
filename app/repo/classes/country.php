<?php
namespace App\repo\classes;

use App\Models\country as ModelsCountry;

class country{


    public function getAllcountry(){

        return ModelsCountry::all();
    }

    public function store($name){

        $country=new ModelsCountry();
        $country->name=$name;
        $country->save();
        return $country;
    }


    public function find($id){

        return ModelsCountry::find($id);
    }



    public function update($id,$name){

        $country=ModelsCountry::find($id);
        $country->name=$name;
        $country->save();
        return $country;

    }


    public function delete($id){


        ModelsCountry::find($id)->delete();
    }

}
