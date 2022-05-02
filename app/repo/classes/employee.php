<?php

namespace App\repo\classes;

use App\Models\employee as ModelsEmployee;

class employee{


    public function getAllemployee(){

        return ModelsEmployee::all()->toArray();

    }


    public function store($request){

        $employee=new ModelsEmployee();
        $employee->name=$request->name;
        $employee->address=$request->address;
        $employee->salary=$request->salary;
        $employee->age=$request->age;
        $employee->office_id=$request->office_id;
        $employee->manager_id=$request->manager_id;
        $employee->save();
        return $employee;

    }

    public function find($id){

        return ModelsEmployee::find($id);
    }



    public function update($request){

        $employee=ModelsEmployee::find($request->id);
        $employee->name=$request->name;
        $employee->address=$request->address;
        $employee->salary=$request->salary;
        $employee->age=$request->age;
        $employee->office_id=$request->office_id;
        $employee->manager_id=$request->manager_id;
        $employee->save();
        return $employee;

    }

    public function delete($id){

        try{

            ModelsEmployee::find($id)->delete();
            return true;

        }catch(\Exception $ex){

            return false;
        }
        }


}
