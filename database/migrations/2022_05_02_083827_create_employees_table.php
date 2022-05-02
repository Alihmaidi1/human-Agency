<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("address");
            $table->string("salary");
            $table->integer("age");
            $table->unsignedBigInteger("office_id");
            $table->foreign("office_id")->references("id")->on("offices")->onDelete("cascade")->onUpdate("cascade");
            $table->unsignedBigInteger("manager_id")->nullable();
            $table->foreign("manager_id")->references("id")->on("employees")->onDelete("set null");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
