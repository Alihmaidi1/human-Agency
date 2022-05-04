<?php

namespace App\Http\Controllers;

use App\repo\classes\center;
use Illuminate\Http\Request;


use App\repo\classes\room as roomclass;
class room extends Controller
{


    public $room;
    public function __construct(roomclass $room)
    {
        $this->room=$room;
    }

    public function index(){

        $rooms=$this->room->getallroom();
        return view("pages.room.index",compact("rooms"));
    }


    public function create(){

        $centers=new center();
        $centers=$centers->getallcenter();
        return view("pages.room.create",compact("centers"));
    }



    public function store(Request $request){

        try{

            $this->room->store($request->name,$request->center_id);
            return redirect()->route("room.index");


        }catch(\Exception $ex){

            return redirect()->back()->withErrors(['error'=>'we have error']);

        }


    }





    public function edit($id){

        $room=$this->room->find($id);
        $centers=new center();
        $centers=$centers->getallcenter();
        return view("pages.room.edit",compact("centers","room"));


    }



    public function update(Request $request){
        try{
            $this->room->update($request->id,$request->name,$request->center_id);
            return redirect()->route("room.index");

        }catch(\Exception $ex){

            return redirect()->back();


        }




    }


    public function delete($id){

        try{

            $this->room->delete($id);
            return redirect()->back();

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(['error'=>"we have error"]);
        }


    }


}
