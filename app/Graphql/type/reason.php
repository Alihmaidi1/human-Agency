<?php

namespace App\Graphql\type;



use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class reason extends GraphQLType{


    protected $attributes = [
        'name'          => 'reason',
        'description'   => 'reason Type',
        // Note: only necessary if you use `SelectFields`
        'model'         => \App\Models\reason::class,
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
