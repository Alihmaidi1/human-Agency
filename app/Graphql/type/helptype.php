<?php

namespace App\Graphql\type;


use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class helptype extends GraphQLType{


    protected $attributes = [
        'name'          => 'helptype',
        'description'   => 'helptype',
        // Note: only necessary if you use `SelectFields`
        'model'         => \App\Models\helptype::class,
    ];




    public function fields(): array
    {
        return [

            'id' => [
                'type' => Type::int(),

            ],
            'name' => [
                'type' => Type::string(),
            ],

            'message' => [
                'type' => Type::string(),
            ],
            'status' => [
                'type' => Type::int(),
            ]
        ];
    }





}
