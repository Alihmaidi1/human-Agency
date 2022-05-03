<?php

namespace App\Graphql\query\country;


use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use App\repo\classes\country;
class findcountry extends Query{

    protected $attributes = [
        'name' => 'findcountry',
    ];

    public function type(): Type
    {
        return GraphQL::type('country');
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

        $country=new country();
        try{


        $country=$country->find($args['id']);
        $country->status=200;
        $country->message="success";
        return $country;

        }catch(\Exception $ex){

            return ["message"=>"erorr the country not found","status"=>500];

        }

    }






}
