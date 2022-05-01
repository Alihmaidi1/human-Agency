<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    use HasFactory;
    public $fillable=["name","age","address"];


    public function nation(){

        return $this->belongsToMany("App\Models\\nationality","App\Models\personNationality","person_id","nationality_id");

    }




}
