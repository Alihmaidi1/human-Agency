<?php

namespace App\Graphql\query\employee;

use App\repo\classes\employee;
use GraphQL;
use GraphQL\Type\Definition\Type;
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


    public function resolve($root, array $args)
    {

        try{
            $employee=new employee();
            $employee->delete($args['id']);
            return ["message"=>"Success","status"=>200];

        }catch(\Exception){
            return ["message"=>"we Have Error","status"=>500];
        }


    }




}
