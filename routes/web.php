<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\login;
use App\Http\Controllers\office;
use App\Http\Controllers\dashboard\dashboard;
use App\Http\Controllers\employee;
use App\Http\Controllers\country;
use App\Http\Controllers\reason;
use App\Http\Controllers\helptype;
use App\Http\Controllers\support;
use App\Http\Controllers\service;
use App\Http\Controllers\center;
use App\Http\Controllers\room;
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


        Route::get("employee.index",[employee::class,"index"])->name("employee.index");
        Route::get("employee.create",[employee::class,"create"])->name("employee.create");
        Route::post("employee.store",[employee::class,"store"])->name("employee.store");
        Route::get("employee.edit/{id}",[employee::class,"edit"])->name("employee.edit");
        Route::post("employee.update",[employee::class,"update"])->name("employee.update");
        Route::get("employee.delete/{id}",[employee::class,"delete"])->name("employee.delete");


        Route::get("country.index",[country::class,"index"])->name("country.index");
        Route::get("country.create",[country::class,"create"])->name("country.create");
        Route::post("country.store",[country::class,"store"])->name("country.store");
        Route::get("country.edit/{id}",[country::class,"edit"])->name("country.edit");
        Route::post("country.update",[country::class,"update"])->name("country.update");
        Route::get("country.delete/{id}",[country::class,"delete"])->name("country.delete");


        Route::get("reason.index",[reason::class,"index"])->name("reason.index");
        Route::get("reason.create",[reason::class,"create"])->name("reason.create");
        Route::post("reason.store",[reason::class,"store"])->name("reason.store");
        Route::get("reason.edit/{id}",[reason::class,"edit"])->name("reason.edit");
        Route::post("reason.update",[reason::class,"update"])->name("reason.update");
        Route::get("reason.delete/{id}",[reason::class,"delete"])->name("reason.delete");



        Route::get("helptype.index",[helptype::class,"index"])->name("helptype.index");
        Route::get("helptype.create",[helptype::class,"create"])->name("helptype.create");
        Route::post("helptype.store",[helptype::class,"store"])->name("helptype.store");
        Route::get("helptype.edit/{id}",[helptype::class,"edit"])->name("helptype.edit");
        Route::post("helptype.update",[helptype::class,"update"])->name("helptype.update");
        Route::get("helptype.delete/{id}",[helptype::class,"delete"])->name("helptype.delete");


        Route::get("support.index",[support::class,"index"])->name("support.index");
        Route::get("support.create",[support::class,"create"])->name("support.create");
        Route::post("support.store",[support::class,"store"])->name("support.store");
        Route::get("support.edit/{id}",[support::class,"edit"])->name("support.edit");
        Route::post("support.update",[support::class,"update"])->name("support.update");
        Route::get("support.delete/{id}",[support::class,"delete"])->name("support.delete");



        Route::get("service.index",[service::class,"index"])->name("service.index");
        Route::get("service.create",[service::class,"create"])->name("service.create");
        Route::post("service.store",[service::class,"store"])->name("service.store");
        Route::get("service.edit/{id}",[service::class,"edit"])->name("service.edit");
        Route::post("service.update",[service::class,"update"])->name("service.update");
        Route::get("service.delete/{id}",[service::class,"delete"])->name("service.delete");



        Route::get("center.index",[center::class,"index"])->name("center.index");
        Route::get("center.create",[center::class,"create"])->name("center.create");
        Route::post("center.store",[center::class,"store"])->name("center.store");
        Route::get("center.edit/{id}",[center::class,"edit"])->name("center.edit");
        Route::post("center.update",[center::class,"update"])->name("center.update");
        Route::get("center.delete/{id}",[center::class,"delete"])->name("center.delete");


        Route::get("room.index",[room::class,"index"])->name("room.index");
        Route::get("room.create",[room::class,"create"])->name("room.create");
        Route::post("room.store",[room::class,"store"])->name("room.store");
        Route::get("room.edit/{id}",[room::class,"edit"])->name("room.edit");
        Route::post("room.update",[room::class,"update"])->name("room.update");
        Route::get("room.delete/{id}",[room::class,"delete"])->name("room.delete");

    });

