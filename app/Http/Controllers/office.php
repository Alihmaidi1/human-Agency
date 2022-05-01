<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repo\classes\office as ClassesOffice;

class office extends Controller
{

    public $office;
    public function __construct(ClassesOffice $office)
    {

        $this->office=$office;

    }
    public function index(){

        $offices=$this->office->getAlloffices();
        return view("pages.office",compact("offices"));

    }

    public function create(){


        return view("pages.createOffice");


    }


    public function store(Request $request){

        try{
            $this->office->store($request);
            return redirect()->route("office.index");

        }catch(\Exception $ex){
            return redirect()->back()->withErrors(["error"=>$ex->getMessage()]);


        }


    }
    public function delete($id){

        try{

            $this->delete($id);
            return redirect()->back();

        }catch(\Exception $ex){

        return redirect()->back()->withErrors(["error"=>$ex->getMessage()]);

        }
    }


    public function edit($id){
        try{

            $office=$this->office->find($id);
            return view("pages.officeEdit",compact("office"));


        }catch(\Exception $ex){

        return redirect()->back()->withErrors(["error"=>$ex->getMessage()]);

        }



    }



    public function update(Request $request){

        try{

            $this->office->update($request);
            return redirect()->route("office.index");

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(["error"=>$ex->getMessage()]);


        }


    }
}
