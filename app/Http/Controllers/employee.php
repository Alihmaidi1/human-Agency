<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repo\classes\employee as employeeclass;
use App\repo\classes\office;

class employee extends Controller
{


    public $employee;
    public function __construct(employeeclass $employee)
    {

        $this->employee=$employee;
    }

    public function index(){


        $employees=$this->employee->getAllemployee();
        return view("pages.employees.index",compact("employees"));
    }

    public function create(){

        $offices=new office();
        $offices=$offices->getAlloffices();
        $managers=$this->employee->getAllemployee();
        return view("pages.employees.create",compact("offices","managers"));
    }


    public function store(Request $request){

        try{

            $this->employee->store($request);

            return redirect()->route("employee.index");
        }catch(\Exception $ex){

            return redirect()->back()->withErrors(['error'=>"we have Error"]);

        }

    }



    public function edit($id){

        $offices=new office();
        $offices=$offices->getAlloffices();
        $managers=$this->employee->getAllemployee();
        $employee=$this->employee->find($id);
        return view("pages.employees.edit",compact("offices","managers","employee"));

    }


    public function update(Request $request){

        try{

            $this->employee->update($request);

            return redirect()->route("employee.index");
        }catch(\Exception $ex){

            return redirect()->back()->withErrors(['error'=>"we have Error"]);

        }
    }


    public function delete($id){


        return $this->employee->delete($id);



    }

}
