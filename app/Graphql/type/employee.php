<?php

namespace App\Graphql\type;


use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;


class employee extends GraphQLType{


    protected $attributes = [
        'name'          => 'employee',
        'description'   => 'Employee person',
        // Note: only necessary if you use `SelectFields`
        'model'         => \App\Models\employee::class,
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

            'salary' => [
                'type' => Type::int(),
            ],

            'age' => [
                'type' => Type::int(),
            ],

            'office' => [
                'type' => Type::string(),
            ],

            'manager' => [
                'type' => Type::string(),
            ],
            'message' => [
                'type' => Type::string(),
            ]
        ];
    }







}
