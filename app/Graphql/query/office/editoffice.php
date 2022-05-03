<?php

namespace App\Graphql\query\office;

use App\repo\classes\office;
use Rebing\GraphQL\Support\Mutation;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Illuminate\Http\Request;

class editoffice extends Mutation{


    protected $attributes = [
        'name' => 'editoffice'
    ];


    public function type(): Type
    {
        return GraphQL::type('office');
    }

    public function args(): array
    {
        return [

            "id"=>[
                "name"=>"id",
                "type"=>Type::int()
            ],
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


    public function resolve($root, array $args)
    {

        try{


            $request=new Request();
            $request->id=$args['id'];
            $request->name=$args['name'];
            $request->address=$args['address'];
            $office=new office();
            $office=$office->update($request);
            $office->message="Success";
            $office->status=200;
            return $office;

        }catch(\Exception $ex){

            return ["message"=>"We Have Error","status"=>500];

        }


    }




}
