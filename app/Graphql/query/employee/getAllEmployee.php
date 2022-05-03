<?php

namespace App\Graphql\query\employee;

use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use App\repo\classes\employee;

class getAllEmployee extends Query{


    protected $attributes = [
        'name' => 'hetAllEmployee',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('employee'));
    }

    public function args(): array
    {
        return [
        ];
    }

    public function resolve($root, array $args)
    {

        try{


        $employees=new employee();
        $employees=$employees->getAllemployee();
        foreach($employees as $employee){
            $employee->office=$employee->office->name;
            $employee->message="Success";
            $employee->status=200;

        if($employee->manager_id!=null){

            $employee->manager=$employee->manager->name;
        }else{

            $employee->manager="Not Have";
        }

        }

            return $employees;

        }catch(\Exception $ex){

            return ["message"=>"we Have Error","status"=>500];
        }

    }






}
