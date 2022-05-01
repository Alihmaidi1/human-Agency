<?php
namespace App\repo\interfaces;
interface person{


    public function getAllPerson();
    public function store($name,$age,$address);

    public function find($id);
    public function update($id,$name,$age,$address);
    public function delete($id);
}
