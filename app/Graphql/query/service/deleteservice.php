<?php

namespace App\Graphql\query\service;


use App\repo\classes\service;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;



class deleteservice extends Mutation{

    protected $attributes = [
        'name' => 'deleteservice'
    ];
    public function type(): Type
    {
        return GraphQL::type('service');
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

            $service=new service();
            $service=$service->delete($args['id']);
            return ["message"=>"Success","status"=>200];
        }catch(\Exception $ex){
            return ["status"=>500,"message"=>"We Have Error"];
        }


    }




}
