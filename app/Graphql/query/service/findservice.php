<?php
namespace App\Graphql\query\service;


use App\repo\classes\service;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class findservice extends Query{



    protected $attributes = [
        'name' => 'findservice',
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
            $service=$service->find($args['id']);
            $service->message="Success";
            $service->status=200;
            return $service;
        }catch(\Exception $ex){

            return ["message"=>"He Have Error","status"=>500];

        }

    }




}
