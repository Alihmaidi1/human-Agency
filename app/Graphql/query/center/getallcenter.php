<?php
namespace App\Graphql\query\center;


use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use App\repo\classes\center;


class getallcenter extends Query{

    protected $attributes = [
        'name' => 'getallcenter',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('center'));
    }

    public function args(): array
    {
        return [

        ];
    }


    public function resolve($root, array $args)
    {

        $center=new center();
        $centers=$center->getallcenter();
        foreach($centers as $center){

            $center->message="Success";
            $center->status=200;

        }
        return $centers;

    }







}
