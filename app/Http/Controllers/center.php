<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\repo\classes\center as centerclass;

class center extends Controller
{

    public $center;
    public function __construct(centerclass $center)
    {
        $this->center=$center;
    }

    public function index(){

        $centers=$this->center->getallcenter();
        return view("pages.center.index",compact("centers"));
    }



    public function create(){

        return view("pages.center.create");
    }


    public function store(Request $request){

        try{

            $this->center->store($request->name);
            return redirect()->route("center.index");

        }catch(\Exception $ex){
            return redirect()->back()->withErrors(['error'=>"we have error"]);

        }



    }




    public function edit($id){

        $center=$this->center->find($id);
        return view("pages.center.edit",compact("center"));
    }



    public function update(Request $request){

        try{

            $this->center->update($request->id,$request->name);
            return redirect()->route("center.index");

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(['error'=>"we have error"]);


        }


    }



    public function delete($id){

        try {

            $this->center->delete($id);

            return redirect()->back();

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(['error'=>"we have error"]);

        }


    }
}
