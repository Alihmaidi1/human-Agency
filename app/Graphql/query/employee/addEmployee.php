<?php

namespace App\Graphql\query\employee;

use App\repo\classes\employee;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Illuminate\Http\Request;
use Rebing\GraphQL\Support\Mutation;

class addEmployee extends Mutation{


    protected $attributes = [
        'name' => 'addemployee'
    ];

    public function type(): Type
    {
        return GraphQL::type('employee');
    }


    public function args(): array
    {
        return [

            'name' => [
                'name' => 'name',
                'type' => Type::string(),
            ],
            'address' => [
                'name' => 'address',
                'type' => Type::string(),
            ],
            'salary' => [
                'name' => 'salary',
                'type' => Type::int(),
            ],
            'age' => [
                'name' => 'age',
                'type' => Type::int(),
            ],
            'office_id' => [
                'name' => 'office_id',
                'type' => Type::int(),
            ],
            'manager_id' => [
                'name' => 'manager_id',
                'type' => Type::int(),
            ],

        ];
    }


    public function resolve($root, array $args)
    {
        try{


        $request=new Request();
        $request->name=$args['name'];
        $request->address=$args['address'];
        $request->salary=$args['salary'];
        $request->age=$args['age'];
        $request->office_id=$args['office_id'];
        $request->manager_id=$args['manager_id'];
        $employee=new employee();
        $employee=$employee->store($request);
        $employee->office=$employee->office->name;
        if($employee->manager_id!=null){
            $employee->manager=$employee->manager->name;
        }else{
            $employee->manager="Not Have";
        }

        $employee->message="Success";
        $employee->status=200;
        return $employee;

        }catch(\Exception $ex){

            return ["message"=>"We Have Error","status"=>500];

        }
    }



}
