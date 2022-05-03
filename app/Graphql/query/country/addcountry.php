<?php

namespace App\Graphql\query\country;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use App\repo\classes\country;

class addcountry extends Mutation{

    protected $attributes = [
        'name' => 'addcountry'
    ];

    public function type(): Type
    {
        return GraphQL::type('country');
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

        $country=new country();
        $country=$country->store($args['name']);
        return $country;
    }









}
