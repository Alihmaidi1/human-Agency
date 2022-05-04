<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repo\classes\service as serviceclass;
class service extends Controller
{


    public function __construct(serviceclass $service)
    {

        $this->service=$service;

    }

    public function index(){

        $services=$this->service->getAllservice();
        return view("pages.service.index",compact("services"));

    }



    public function create(){

        return view("pages.service.create");

    }


    public function store(Request $request){

        try{

            $this->service->store($request->name,$request->detail);
            return redirect()->route("service.index");

        }catch(\Exception $ex){


            return redirect()->back()->withErrors(['error'=>"we have error"]);

        }



    }



    public function edit($id){

        $service=$this->service->find($id);

        return view("pages.service.edit",compact("service"));


    }


    public function update(Request $request){

        try{

            $this->service->update($request->id,$request->name,$request->detail);
            return redirect()->route("service.index");
        }catch(\Exception $ex){

            return redirect()->back();

        }



    }


    public function delete($id){

        try{

            $this->service->delete($id);
            return redirect()->back();

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(["error"=>"We Have Errror"]);


        }

    }

}
