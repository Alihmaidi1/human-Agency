<?php

namespace App\repo\classes;

use App\Models\room as ModelsRoom;

class room{


    public function getallroom(){

        return ModelsRoom::all();
    }

    public function store($name,$center_id){

        $room=new ModelsRoom();
        $room->name=$name;
        $room->center_id=$center_id;
        $room->save();
        return $room;

    }


    public function find($id){

        return ModelsRoom::findOrFail($id);
    }


    public function update($id,$name,$center_id){

        $room=$this->find($id);
        $room->name=$name;
        $room->center_id=$center_id;
        $room->save();
        return $room;

    }


    public function delete($id){

        return $this->find($id)->delete();


    }

}
