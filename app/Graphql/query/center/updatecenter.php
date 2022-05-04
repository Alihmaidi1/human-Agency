<?php

namespace App\Graphql\query\center;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use App\repo\classes\center;


class updatecenter extends Mutation{

    protected $attributes = [
        'name' => 'updatecenter'
    ];


    public function type(): Type
    {
        return GraphQL::type('center');
    }


    public function args(): array
    {
        return [

            'name' => [
                'name' => 'name',
                'type' => Type::string(),
            ],
            "id"=>[

                "name"=>"id",
                "type"=>Type::int()
            ]

        ];
    }

    public function resolve($root, array $args)
    {

        try{
            $center=new center();
            $center=$center->update($args['id'],$args["name"]);
            $center->status=200;
            $center->message="we can't edit country";
            return $center;

        }catch(\Exception){

        return ["message"=>"we have error","status"=>500];

        }
    }




}
