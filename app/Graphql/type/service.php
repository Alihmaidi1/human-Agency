<?php

namespace App\Graphql\type;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;


class service extends GraphQLType{


    protected $attributes = [
        'name'          => 'service',
        'description'   => 'service',
        // Note: only necessary if you use `SelectFields`
        'model'         => \App\Models\service::class,
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
            'detail' => [
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
