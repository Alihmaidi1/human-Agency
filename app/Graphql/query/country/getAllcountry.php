<?php
namespace App\Graphql\query\country;


use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use App\repo\classes\country;


class getAllCountry extends Query{

    protected $attributes = [
        'name' => 'getAllCountry',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('country'));
    }

    public function args(): array
    {
        return [

        ];
    }


    public function resolve($root, array $args)
    {

        $country=new country();
        $country=$country->getAllcountry();
        return $country;

    }







}
