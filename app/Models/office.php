<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class office extends Model
{
    use HasFactory;

    public $fillable=["name","address"];


    public function employees(){

        return $this->hasMany("App\Models\\employee","office_id");

    }

}
