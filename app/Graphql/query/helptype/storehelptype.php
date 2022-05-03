<?php

namespace App\Graphql\query\helptype;

use App\repo\classes\helptype;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Illuminate\Http\Request;
use Rebing\GraphQL\Support\Mutation;


class storehelptype extends Mutation{

    protected $attributes = [
        'name' => 'addhelptype'
    ];

    public function type(): Type
    {
        return GraphQL::type('helptype');
    }


    public function args(): array
    {
        return [

            'name' => [
                'name' => 'name',
                'type' => Type::string(),
            ],
        ];
    }

    public function resolve($root, array $args)
    {
        try{

            $helptype=new helptype();
            $helptype=$helptype->store($args['name']);
            $helptype->message="Success";
            $helptype->status=200;
            return $helptype;
        }catch(\Exception $ex){

            return ["message"=>"We Have Error","status"=>500];

        }
    }



}
