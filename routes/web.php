<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\login;
use App\Http\Controllers\office;
use App\Http\Controllers\dashboard\dashboard;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[login::class,"index"])->name("login")->middleware("guest");
Route::post("/admin.login",[login::class,"login"])->name("admin.login");

    Route::group(["middleware"=>"auth:web"],function(){

        Route::get("/admin.dashboard",[dashboard::class,"index"])->name("admin.dashboard");


        Route::get("office.create",[office::class,"create"])->name("office.create");
        Route::post("office.store",[office::class,"store"])->name("office.store");
        Route::get("office.index",[office::class,"index"])->name("office.index");
        Route::get("office.delete/{id}",[office::class,"delete"])->name("office.delete");
        Route::get("office.edit/{id}",[office::class,"edit"])->name("office.edit");
        Route::post("office.update",[office::class,"update"])->name("office.update");
    });

