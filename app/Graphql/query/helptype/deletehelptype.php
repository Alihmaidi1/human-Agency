<?php

namespace App\Graphql\query\helptype;

use App\repo\classes\helptype;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Illuminate\Http\Request;
use Rebing\GraphQL\Support\Mutation;


class deletehelptype extends Mutation{

    protected $attributes = [
        'name' => 'deletehelptype'
    ];

    public function type(): Type
    {
        return GraphQL::type('helptype');
    }


    public function args(): array
    {
        return [

            "id"=>[

                "name"=>"id",
                "type"=>Type::int()

            ]
        ];
    }



    public function resolve($root, array $args)
    {
        try{

            $helptype=new helptype();
            $helptype->delete($args['id']);
            return ["message"=>"Success","status"=>200];
        }catch(\Exception $ex){

            return ["message"=>"We Have Error","status"=>500];

        }
    }



}
