<?php

namespace App\Graphql\query\service;

use App\repo\classes\service;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Illuminate\Http\Request;
use LDAP\Result;
use Rebing\GraphQL\Support\Mutation;

class storeservice extends Mutation{

    protected $attributes = [
        'name' => 'addservice'
    ];
    public function type(): Type
    {
        return GraphQL::type('service');
    }

    public function args(): array
    {
        return [

            'name' => [
                'name' => 'name',
                'type' => Type::string(),
            ],

            'detail' => [
                'name' => 'detail',
                'type' => Type::string(),
            ],
        ];
    }


    public function resolve($root, array $args)
    {

        try{

            $service=new service();
            $service=$service->store($args['name'],$args['detail']);
            $service->message="Success";
            $service->status=200;
            return $service;
        }catch(\Exception $ex){
            return ["status"=>500,"message"=>"We Have Error"];
        }


    }




}
