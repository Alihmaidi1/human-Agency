<?php

namespace App\Graphql\query\office;
use App\repo\classes\office;
use Rebing\GraphQL\Support\Mutation;
use GraphQL;
use GraphQL\Type\Definition\Type;


class deleteoffice extends Mutation{


    protected $attributes = [
        'name' => 'deleteoffice'
    ];

    public function type(): Type
    {
        return GraphQL::type('office');
    }

    public function args(): array
    {
        return [

            "id"=>[
                "name"=>"id",
                "type"=>Type::int()
            ],
        ];
    }

    public function resolve($root, array $args)
    {

        try{


        $office=new office();
        $office->delete($args['id']);
        return ["message"=>"Success","status"=>200];


        }catch(\Exception $ex){

            return ["message"=>"we Have Error","status"=>500];

        }
    }



}
