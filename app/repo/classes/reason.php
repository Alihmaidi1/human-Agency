<?php

namespace App\repo\classes;

use App\Models\reason as ModelsReason;

class reason{

    public function getAllReason(){

        return ModelsReason::all();

    }

    public function store($name){
        $reason=new ModelsReason();
        $reason->name=$name;
        $reason->save();
        return $reason;
    }

    public function find($id){

        return ModelsReason::findOrFail($id);
    }



    public function update($id,$name){

        $reason=$this->find($id);
        $reason->name=$name;
        $reason->save();
        return $reason;

    }


    public function delete($id){

        return $this->find($id)->delete();

    }
}
