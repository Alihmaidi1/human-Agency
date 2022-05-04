<?php

namespace App\Graphql\query\service;

use App\repo\classes\service;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
class getAllservice extends Query{

    protected $attributes = [
        'name' => 'service',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('service'));
    }

    public function args(): array
    {
        return [


        ];
    }



    public function resolve($root, array $args)
    {

        try{

            $service=new service();
            $services=$service->getAllservice();
            foreach($services as $service){
            $services->message="Success";
            $services->status=200;
            }
            return $services;
        }catch(\Exception $ex){

            return ["message"=>"He Have Error","status"=>500];

        }

    }




}
