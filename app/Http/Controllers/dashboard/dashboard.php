<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboard extends Controller
{

    public function index(){


        return view("index");

    }

}
