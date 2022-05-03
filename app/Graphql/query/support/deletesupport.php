<?php

namespace App\Graphql\query\support;

use App\repo\classes\support;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Illuminate\Http\Request;
use LDAP\Result;
use Rebing\GraphQL\Support\Mutation;

class deletesupport extends Mutation{

    protected $attributes = [
        'name' => 'deletesupport'
    ];
    public function type(): Type
    {
        return GraphQL::type('support');
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

            $support=new support();
            $support->delete($args['id']);
            return ["message"=>"Success","status"=>200];
        }catch(\Exception $ex){
            return ["status"=>500,"message"=>"We Have Error"];
        }


    }





}
