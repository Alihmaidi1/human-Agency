<?php

namespace App\Graphql\query\country;


use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use App\repo\classes\country;


class deletecountry extends Mutation{

    protected $attributes = [
        'name' => 'editcountry'
    ];

    public function type(): Type
    {
        return GraphQL::type('country');
    }

    public function args(): array
    {
        return [

            'id' => [
                'name' => 'id',
                'type' => Type::int(),
            ],

        ];
    }

    public function resolve($root, array $args)
    {

        $country=new country();
        $country=$country->delete($args['id']);
        return ["message"=>"true"];
    }







}
