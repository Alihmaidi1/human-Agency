<?php

namespace App\Graphql\query\support;

use App\repo\classes\support;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Illuminate\Http\Request;
use LDAP\Result;
use Rebing\GraphQL\Support\Mutation;

class updatesupport extends Mutation{

    protected $attributes = [
        'name' => 'updatesupport'
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
            "id"=>[

                "name"=>"id",
                "type"=>Type::int()

            ]
        ];
    }

    public function resolve($root, array $args)
    {

        try{

            $support=new support();
            $support1=$support->find($args["id"]);
            $support=$support->update($support1->id,$args['name']);
            $support->message="Success";
            $support->status=200;
            return $support;
        }catch(\Exception $ex){
            return ["status"=>500,"message"=>"We Have Error"];
        }


    }





}
