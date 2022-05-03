<?php

namespace App\Graphql\query\reason;


use App\repo\classes\reason;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;



class deletereason extends Mutation{

    protected $attributes = [
        'name' => 'deletereason'
    ];
    public function type(): Type
    {
        return GraphQL::type('reason');
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

            $reason=new reason();
            $reason=$reason->delete($args['id']);
            return ["message"=>"Success","status"=>200];
        }catch(\Exception $ex){
            return ["status"=>500,"message"=>"We Have Error"];
        }


    }




}
