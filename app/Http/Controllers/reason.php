<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repo\classes\reason as reasonclass;
class reason extends Controller
{

    public $reason;
    public function __construct(reasonclass $reason)
    {

        $this->reason=$reason;

    }
    public function index(){

        $reasons=$this->reason->getAllReason();

        return view("pages.reason.index",compact("reasons"));

    }



    public function create(){

        return view("pages.reason.create");

    }


    public function store(Request $request){

        try{

            $reason=$this->reason->store($request->name);
            return redirect()->route("reason.index");

        }catch(\Exception $ex){


            return redirect()->back()->withErrors(["error"=>"We Have Error"]);

        }

    }


    public function edit($id){

        $reason=$this->reason->find($id);
        return view("pages.reason.edit",compact("reason"));

    }


    public function update(Request $request){
        try{

            $this->reason->update($request->id,$request->name);
            return redirect()->route("reason.index");

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(["error"=>"We Have Error"]);

        }

    }


    public function delete($id){

        try{

            $this->reason->delete($id);
            return redirect()->back();

        }catch(\Exception $ex){
            return redirect()->back()->withErrors(["error"=>"We Have Error"]);
        }



    }




}
