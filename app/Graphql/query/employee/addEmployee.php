<?php

namespace App\Graphql\query\employee;

use App\Models\employee;
use Closure;
use GraphQL;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\Mutation;

class addEmployee extends Mutation{


    protected $attributes = [
        'name' => 'addemployee'
    ];

    public function type(): Type
    {
        return GraphQL::type('employee');
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

        $employee=new employee();
        $employee->name=$args['name'];
        $employee->address=$args['address'];
        $employee->salary=$args['salary'];
        $employee->age=$args['age'];
        $employee->office_id=$args['office_id'];
        $employee->manager_id=$args['manager_id'];
        $employee->save();
        $employee->office=$employee->office->name;
        if($employee->manager_id!=null){

            $employee->manager=$employee->manager->name;

        }else{

            $employee->manager="Not Have";

        }
        return $employee;
    }



}
