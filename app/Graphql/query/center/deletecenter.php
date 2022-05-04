<?php

namespace App\Graphql\query\center;


use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use App\repo\classes\center;


class deletecenter extends Mutation{

    protected $attributes = [
        'name' => 'deletecenter'
    ];

    public function type(): Type
    {
        return GraphQL::type('center');
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

        $center=new center();
        $center=$center->delete($args['id']);
        return ["message"=>"true","status"=>200];

        }catch(\Exception){

            return ["message"=>"we have Error","status"=>500];

        }
    }







}
