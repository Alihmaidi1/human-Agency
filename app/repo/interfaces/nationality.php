<?php
namespace App\repo\interfaces;


interface nationality{

    public function getAllNationality();

    public function store($name);
    public function update($id,$name);
    public function delete($id);

}
