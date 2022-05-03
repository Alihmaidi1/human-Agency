<?php

namespace App\Http\Controllers;

use App\repo\classes\helptype as ClassesHelptype;
use Illuminate\Http\Request;

class helptype extends Controller
{

    public $helptype;
    public function __construct(ClassesHelptype $helptype)
    {

        $this->helptype=$helptype;

    }
    public function index(){

        $helptypes=$this->helptype->getAllHelptype();

        return view("pages.helptype.index",compact("helptypes"));


    }



    public function create(){

        return view("pages.helptype.create");


    }



    public function store(Request $request){

        try{

            $this->helptype->store($request->name);
            return redirect()->route("helptype.index");

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(["error"=>"we have Error"]);

        }


    }


    public function edit($id){


        $helptype=$this->helptype->find($id);
        return view("pages.helptype.edit",compact("helptype"));

    }

    public function update(Request $request){
        try{

            $this->helptype->update($request->id,$request->name);
            return redirect()->route("helptype.index");

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(["error"=>"We Have Error"]);

        }


    }


    public function delete($id){

        try{

            $this->helptype->delete($id);
            return redirect()->back();

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(["error"=>"we Have Error"]);

        }



    }

}

