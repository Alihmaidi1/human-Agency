<?php

namespace App\Http\Controllers;

use App\Models\country as ModelsCountry;
use App\repo\classes\country as classcountry;
use Illuminate\Http\Request as HttpRequest;

class country extends Controller
{

    public $country;

    public function __construct(classcountry $country)
    {
        $this->country=$country;
    }
    public function index(){

        $countrys=$this->country->getAllcountry();
        return view("pages.country.index",compact("countrys"));


    }


    public function create(){

        return view("pages.country.create");
    }

    public function store(HttpRequest $request){

        try{
            $country=$this->country->store($request->country);
            return redirect()->route("country.index");

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(["error"=>"we have error"]);

        }


    }


    public function edit($id){


        $country=$this->country->find($id);
        return view("pages.country.edit",compact("country"));


    }



    public function update(HttpRequest $request){


        try{

            $country=$this->country->update($request->id,$request->country);
            return redirect()->route("country.index");


        }catch(\Exception $ex){

            return redirect()->back()->withErrors(["error"=>"we have error"]);


        }

    }



    public function delete($id){

        try{

            $this->country->delete($id);
            return redirect()->back();

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(["error"=>"we have error"]);
        }



    }

}
