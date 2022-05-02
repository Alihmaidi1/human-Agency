<?php
namespace App\Graphql\query\office;

use App\Models\office;
use Closure;
use GraphQL;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\Mutation;

class addoffice extends Mutation{

    protected $attributes = [
        'name' => 'addoffice'
    ];
    public function type(): Type
    {
        return GraphQL::type('office');
    }

    public function args(): array
    {
        return [

            'name' => [
                'name' => 'name',
                'type' => Type::string(),
            ],
            'address' => [
                'name' => 'address',
                'type' => Type::string(),
            ],
        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {

        $office=new office();
        $office->name=$args['name'];
        $office->address=$args['address'];
        $office->save();
        return $office;
    }



}
