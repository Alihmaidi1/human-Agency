<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nationality extends Model
{
    use HasFactory;
    public $fillable=["name"];
    public function person(){

        return $this->belongsToMany("App\Models\person","App\Models\personNationality","nationality_id","person_id");
    }
}
