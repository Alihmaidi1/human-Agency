<?php

namespace App\Graphql\query\office;

use App\Models\office;
use Rebing\GraphQL\Support\Mutation;
use GraphQL;
use GraphQL\Type\Definition\Type;

class editoffice extends Mutation{


    protected $attributes = [
        'name' => 'editoffice'
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
            'name' => [
                'name' => 'name',
                'type' => Type::string(),
            ],
            'address' => [
                'name' => 'address',
                'type' => Type::string(),
            ],
        ];
    }


    public function resolve($root, array $args)
    {

        $office=office::find($args['id']);
        $office->name=$args['name'];
        $office->address=$args['address'];
        $office->save();
        return $office;
    }




}
