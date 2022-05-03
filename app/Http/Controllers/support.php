<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repo\classes\support as supportclass;
class support extends Controller
{

    public $support;
    public function __construct(supportclass $support)
    {

        $this->support=$support;

    }
    public function index(){

        $supports=$this->support->getAllsupport();
        return view("pages.support.index",compact("supports"));

    }


    public function create(){

        return view("pages.support.create");

    }


    public function store(Request $request){

        try{

            $this->support->store($request->name);
            return redirect()->route("support.index");

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(["error"=>"We Have Error"]);

        }


    }


    public function edit($id){

        $support=$this->support->find($id);
        return view("pages.support.edit",compact("support"));

    }



    public function update(Request $request){

        try{

            $this->support->update($request->id,$request->name);
            return redirect()->route("support.index");


        }catch(\Exception $ex){


            return redirect()->back();

        }


    }



    public function delete($id){

        try{


            $this->support->delete($id);
            return redirect()->back();
        }catch(\Exception $ex){

            return redirect()->back()->withErrors(["error"=>"we Have Error"]);

        }


    }
}
