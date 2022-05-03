<?php

namespace App\Graphql\query\helptype;

use App\repo\classes\helptype;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class getallhelptype extends Query{


    protected $attributes = [
        'name' => 'getAllHelptype',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('helptype'));
    }

    public function args(): array
    {
        return [


        ];
    }




    public function resolve($root, array $args)
    {

        try{

            $helptype=new helptype();
            $helptypes=$helptype->getAllHelptype();
            foreach($helptypes as $helptype){
                $helptype->message="Success";
                $helptype->status=200;
            }
            return $helptypes;

        }catch(\Exception $ex){

            return ["message"=>"we Have Error","status"=>500];

        }


    }






}

