<?php

namespace App\Graphql\query\employee;

use App\repo\classes\employee;
use Closure;
use GraphQL;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Illuminate\Http\Request;
use Rebing\GraphQL\Support\Mutation;

use function PHPSTORM_META\type;

class editemployee extends Mutation{


    protected $attributes = [
        'name' => 'editemployee'
    ];

    public function type(): Type
    {
        return GraphQL::type('employee');
    }


    public function args(): array
    {
        return [

            'id'=>[
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
            'salary' => [
                'name' => 'salary',
                'type' => Type::int(),
            ],
            'age' => [
                'name' => 'age',
                'type' => Type::int(),
            ],
            'office_id' => [
                'name' => 'office_id',
                'type' => Type::int(),
            ],
            'manager_id' => [
                'name' => 'manager_id',
                'type' => Type::int(),
            ],

        ];
    }




    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {

        try{


            $request=new Request();
        $request->id=$args['id'];
        $request->name=$args['name'];
        $request->address=$args['address'];
        $request->salary=$args['salary'];
        $request->age=$args['age'];
        $request->office_id=$args['office_id'];
        $request->manager_id=$args['manager_id'];
        $employee=new employee();
        $employee=$employee->update($request);
        $employee->office=$employee->office->name;
        if($employee->manager_id!=null){
            $employee->manager=$employee->manager->name;
        }else{
            $employee->manager="Not Have";
        }
        $employee->message="Success";
        $employee->status=200;
        return $employee;
        }catch(\Exception $ex){

            return ["message"=>"We Have Error","status"=>500];





        }



    }




}
