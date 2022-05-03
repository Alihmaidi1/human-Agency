<?php

namespace App\Graphql\query\office;
use App\repo\classes\office as officeclass;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;



class office  extends Query{

    protected $attributes = [
        'name' => 'office',
    ];

    public function type(): Type
    {
        return GraphQL::type('office');
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


        try{

            $office=new officeclass();
            $office=$office->find($args['id']);
            $office->message="Success";
            $office->status=200;
            return $office;

        }catch(\Exception $ex){
            return ["message"=>"We Have Error","status"=>500];

        }

    }


}
