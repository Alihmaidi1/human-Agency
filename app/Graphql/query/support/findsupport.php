<?php

namespace App\Graphql\query\support;


use App\repo\classes\support;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;


class findsupport extends Query{


    protected $attributes = [
        'name' => 'findsupport',
    ];

    public function type(): Type
    {
        return GraphQL::type('support');
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

            $support=new support();
            $support=$support->find($args['id']);
            $support->message="Success";
            $support->status=200;
            return $support;
        }catch(\Exception $ex){

            return ["message"=>"He Have Error","status"=>500];

        }

    }


}
