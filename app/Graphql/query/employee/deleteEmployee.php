<?php

namespace App\Graphql\query\employee;

use App\Models\employee;
use Closure;
use GraphQL;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\Mutation;

class deleteEmployee extends Mutation{


    protected $attributes = [
        'name' => 'deleteemployee'
    ];

    public function type(): Type
    {
        return GraphQL::type('employee');
    }


    public function args(): array
    {
        return [

            'id'=>[
                "name"=>"id",
                "type"=>Type::int()
            ]

        ];
    }


    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {

        $employee1=employee::find($args['id']);
        $employee=$employee1;
        $employee->office=$employee->office->name;
        if($employee->manager_id!=null){

            $employee->manager=$employee->manager->name;

        }else{

        $employee->office="Not Have";

        }
        $employee1->delete();

        return $employee;
    }




}
