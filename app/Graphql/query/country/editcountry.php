<?php

namespace App\Graphql\query\country;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use App\repo\classes\country;


class editcountry extends Mutation{

    protected $attributes = [
        'name' => 'editcountry'
    ];


    public function type(): Type
    {
        return GraphQL::type('country');
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

        $country=new country();
        try{
            $country=$country->update($args['id'],$args["name"]);
            $country->status=200;
            $country->message="we can't edit country";
            return $country;

        }catch(\Exception){

        return ["message"=>"we have error","status"=>500];

        }
    }




}
