<?php

namespace App\Graphql\query\helptype;


use App\repo\classes\helptype;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;



class findhelptype extends Query{


    protected $attributes = [
        'name' => 'findHelptype',
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
            $helptype=$helptype->find($args['id']);
            $helptype->message="Success";
            $helptype->status=200;
            return $helptype;

        }catch(\Exception $ex){

            return ["message"=>"we Have Error","status"=>500];

        }


    }






}
