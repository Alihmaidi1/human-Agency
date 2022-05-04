<?php

namespace App\repo\classes;

use App\Models\center as ModelsCenter;

class center{


    public function getallcenter(){

        return ModelsCenter::all();
    }


    public function store($name){

        $center=new ModelsCenter();
        $center->name=$name;
        $center->save();
        return $center;

    }


    public function find($id){

        return ModelsCenter::findOrFail($id);
    }



    public function update($id,$name){

        $center=$this->find($id);
        $center->name=$name;
        $center->save();
        return $center;

    }


    public function delete($id){


        return $this->find($id)->delete();
    }
}
