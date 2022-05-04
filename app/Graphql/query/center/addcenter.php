<?php

namespace App\Graphql\query\center;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use App\repo\classes\center;

class addcenter extends Mutation{

    protected $attributes = [
        'name' => 'addcenter'
    ];

    public function type(): Type
    {
        return GraphQL::type('center');
    }


    public function args(): array
    {
        return [

            'name' => [
                'name' => 'name',
                'type' => Type::string(),
            ],

        ];
    }

    public function resolve($root, array $args)
    {
        try{
            $center=new center();
            $center=$center->store($args['name']);
            $center->status=200;
            $center->message="Success";
            return $center;

        }catch(\Exception $ex){

            return ["message"=>"we can't add country","status"=>500];

        }
    }









}
