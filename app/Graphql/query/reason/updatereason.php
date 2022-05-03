<?php

namespace App\Graphql\query\reason;


use App\repo\classes\reason;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;


class updatereason extends Mutation{

    protected $attributes = [
        'name' => 'updatereason'
    ];
    public function type(): Type
    {
        return GraphQL::type('reason');
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

            $reason=new reason();
            $reason=$reason->update($args['id'],$args['name']);
            $reason->message="Success";
            $reason->status=200;
            return $reason;
        }catch(\Exception $ex){
            return ["status"=>500,"message"=>"We Have Error"];
        }


    }



}
