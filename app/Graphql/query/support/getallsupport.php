<?php

namespace App\Graphql\query\support;


use App\repo\classes\support;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class getallsupport extends Query{

    protected $attributes = [
        'name' => 'support',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('support'));
    }


    public function args(): array
    {
        return [


        ];
    }



    public function resolve($root, array $args)
    {
        try{

            $support=new support();
            $supports=$support->getAllsupport();
            foreach($supports as $support){

                $support->message="Success";
                $support->status=200;

            }
            return $supports;
        }catch(\Exception $ex){

            return ["message"=>"He Have Error","status"=>500];

        }

    }



}
