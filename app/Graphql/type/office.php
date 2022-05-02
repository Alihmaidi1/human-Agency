<?php

namespace App\Graphql\type;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
class office extends GraphQLType{

    protected $attributes = [
        'name'          => 'office',
        'description'   => 'office center',
        // Note: only necessary if you use `SelectFields`
        'model'         => \App\Models\office::class,
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
            'address' => [
                'type' => Type::string(),
            ],
            'message' => [
                'type' => Type::string(),
            ]
        ];
    }



}
