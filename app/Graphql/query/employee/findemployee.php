<?php

namespace App\Graphql\query\employee;


use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use App\repo\classes\employee;
class findemployee extends Query{

    protected $attributes = [
        'name' => 'findemployee',
    ];

    public function type(): Type
    {
        return GraphQL::type('employee');
    }



    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
            ],

        ];
    }

    public function resolve($root, array $args)
    {

        try{


        $employee=new employee();
        $employee=$employee->find($args['id']);
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

            return ["message"=>"we have error","status"=>500];

        }

    }



}
