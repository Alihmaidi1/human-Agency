<?php
namespace App\Graphql\query\office;
use App\repo\classes\office;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Illuminate\Http\Request;
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

    public function resolve($root, array $args)
    {

        try{
        $request=new Request();
        $request->name=$args['name'];
        $request->address=$args['address'];
        $office=new office();
        $office=$office->store($request);
        $office->message="Success";
        $office->status=200;
        return $office;

        }catch(\Exception $ex){
            return ["status"=>500,"message"=>"We Have Error"];
        }


    }



}
