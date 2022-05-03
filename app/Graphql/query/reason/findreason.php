<?php
namespace App\Graphql\query\reason;


use App\repo\classes\reason;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class findreason extends Query{



    protected $attributes = [
        'name' => 'findreason',
    ];

    public function type(): Type
    {
        return GraphQL::type('reason');
    }

    public function args(): array
    {
        return [

            "id"=>[

                "name"=>"id",
                "type"=>Type::int()

            ]

        ];
    }


    public function resolve($root, array $args)
    {

        try{

            $reason=new reason();
            $reasons=$reason->find($args['id']);
            $reasons->message="Success";
            $reasons->status=200;
            return $reasons;
        }catch(\Exception $ex){

            return ["message"=>"He Have Error","status"=>500];

        }

    }




}
