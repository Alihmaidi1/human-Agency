<?php

namespace App\repo\classes;

use App\Models\service as ModelsService;

class service{


    public function getAllservice(){

        return ModelsService::all();

    }


    public function store($name,$detail){

        $service=new ModelsService();
        $service->name=$name;
        $service->detail=$detail;
        $service->save();
        return $service;

    }

    public function find($id){

        return ModelsService::findOrFail($id);

    }


    public function update($id,$name,$detail){


        $service=$this->find($id);
        $service->name=$name;
        $service->detail=$detail;
        $service->save();
        return $service;


    }


    public function delete($id){

        return $this->find($id)->delete();


    }
}
