<?php

namespace App\repo\classes;

use App\Models\support as ModelsSupport;

class support{


    public function getAllsupport(){

        return ModelsSupport::all();
    }


    public function store($name){

        $support=new ModelsSupport();
        $support->name=$name;
        $support->save();
        return $support;


    }


    public function find($id){

        return ModelsSupport::findOrFail($id);

    }

    public function update($id,$name){

        $support=$this->find($id);
        $support->name=$name;
        $support->save();
        return $support;

    }

    public function delete($id){


        return $this->find($id)->delete();


    }




}
