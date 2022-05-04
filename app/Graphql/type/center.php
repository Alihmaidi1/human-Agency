<?php

namespace App\Graphql\type;


use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class center extends GraphQLType{

    protected $attributes = [
        'name'          => 'center',
        'description'   => 'center',
        // Note: only necessary if you use `SelectFields`
        'model'         => \App\Models\center::class,
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
