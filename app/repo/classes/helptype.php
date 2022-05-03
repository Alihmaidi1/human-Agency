<?php

namespace App\repo\classes;

use App\Models\helptype as ModelsHelptype;

class helptype{


    public function getAllHelptype(){

        return ModelsHelptype::all();
    }

    public function store($name){

        $helptype=new ModelsHelptype();
        $helptype->name=$name;
        $helptype->save();
        return $helptype;


    }


    public function find($id){

        return ModelsHelptype::findOrFail($id);

    }

    public function update($id,$name){

        $helptype=$this->find($id);
        $helptype->name=$name;
        $helptype->save();
        return $helptype;
    }

    public function delete($id){


            return $this->find($id)->delete();

    }
}
