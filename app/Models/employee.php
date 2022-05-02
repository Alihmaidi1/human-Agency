<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    public $fillable=["name","address","salary","age","office_id","manager_id"];

    public function office(){

        return $this->belongsTo("App\Models\office","office_id");

    }

    public function employees(){

        return $this->hasMany("App\Models\\employee","manager_id");

    }

    public function manager(){

        return $this->belongsTo("App\Models\\employee","manager_id");

    }

}
