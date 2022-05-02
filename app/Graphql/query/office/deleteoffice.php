<?php

namespace App\Graphql\query\office;
use App\Models\office;
use Rebing\GraphQL\Support\Mutation;
use GraphQL;
use GraphQL\Type\Definition\Type;


class deleteoffice extends Mutation{


    protected $attributes = [
        'name' => 'deleteoffice'
    ];

    public function type(): Type
    {
        return GraphQL::type('office');
    }

    public function args(): array
    {
        return [

            "id"=>[
                "name"=>"id",
                "type"=>Type::int()
            ],
        ];
    }

    public function resolve($root, array $args)
    {

        $office=office::find($args['id']);
        $office->delete();
        return ["message"=>"true"];
    }



}
