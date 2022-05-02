<?php
namespace App\Graphql\query\office;


use App\Models\office as ModelsOffice;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Closure;

class getAllOffice extends Query {

    protected $attributes = [
        'name' => 'office',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('office'));
    }

    public function args(): array
    {
        return [


        ];
    }


    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {

            return ModelsOffice::all();

    }




}
