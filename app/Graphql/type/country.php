<?php

namespace App\Graphql\type;


use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class country extends GraphQLType{

    protected $attributes = [
        'name'          => 'country',
        'description'   => 'Country',
        // Note: only necessary if you use `SelectFields`
        'model'         => \App\Models\country::class,
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
            ]
        ];
    }




}
