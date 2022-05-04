<?php

namespace App\Graphql\query\center;


use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use App\repo\classes\center;
class findcenter extends Query{

    protected $attributes = [
        'name' => 'findcenter',
    ];

    public function type(): Type
    {
        return GraphQL::type('center');
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

        $center=new center();
        $center=$center->find($args['id']);
        $center->status=200;
        $center->message="success";
        return $center;

        }catch(\Exception $ex){

            return ["message"=>"erorr the country not found","status"=>500];

        }

    }






}
