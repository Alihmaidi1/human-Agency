<?php

namespace App\repo\classes;

use App\Models\office as ModelsOffice;
class office{



    public function getAlloffices(){


        $offices=ModelsOffice::all()->toArray();
        return $offices;
    }


    public function store($request){

        $office=new ModelsOffice();
        $office->name=$request->name;
        $office->address=$request->address;
        $office->save();
        return $office;


    }



    public function delete($id){


        return ModelsOffice::findOrFail($id)->delete();

    }

    public function find($id){

        return ModelsOffice::findOrFail($id);
    }


    public function update($request){

        $office=ModelsOffice::findOrFail($request->id);
        $office->name=$request->name;
        $office->address=$request->address;
        $office->save();

        return $office;


    }


}
