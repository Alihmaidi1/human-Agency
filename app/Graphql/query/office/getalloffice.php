<?php
namespace App\Graphql\query\office;

use App\repo\classes\office;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

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


    public function resolve($root, array $args)
    {

        try{

            $office=new office();
            $offices=$office->getAlloffices();
            foreach($offices as $office){
                $office['message']="Success";
                $office['status']=200;
            }
            return $offices;

        }catch(\Exception $ex){

            return ["message"=>"we Have Error","status"=>500];

        }


    }




}
