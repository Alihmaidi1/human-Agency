<?php

namespace App\Graphql\query\support;

use App\repo\classes\support;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Illuminate\Http\Request;
use LDAP\Result;
use Rebing\GraphQL\Support\Mutation;

class addsupport extends Mutation{

    protected $attributes = [
        'name' => 'addsupport'
    ];
    public function type(): Type
    {
        return GraphQL::type('support');
    }


    public function args(): array
    {
        return [

            'name' => [
                'name' => 'name',
                'type' => Type::string(),
            ],
        ];
    }

    public function resolve($root, array $args)
    {

        try{

            $support=new support();
            $support1=$support->store($args["name"]);
            $support1->message="Success";
            $support1->status=200;
            return $support1;
        }catch(\Exception $ex){
            return ["status"=>500,"message"=>"We Have Error"];
        }


    }





}
