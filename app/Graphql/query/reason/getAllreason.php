<?php

namespace App\Graphql\query\reason;

use App\repo\classes\reason;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
class getAllReason extends Query{

    protected $attributes = [
        'name' => 'reason',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('reason'));
    }

    public function args(): array
    {
        return [


        ];
    }



    public function resolve($root, array $args)
    {

        try{

            $reason=new reason();
            $reasons=$reason->getAllReason();
            $reasons->message="Success";
            $reasons->status=200;
            return $reasons;
        }catch(\Exception $ex){

            return ["message"=>"He Have Error","status"=>500];

        }

    }




}
