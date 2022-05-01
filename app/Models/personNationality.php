<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personNationality extends Model
{
    use HasFactory;

    public $fillable=["person_id","nationality_id"];



}
