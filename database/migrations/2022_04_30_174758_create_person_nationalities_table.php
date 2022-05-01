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
        Schema::create('person_nationalities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("person_id");
            $table->foreign("person_id")->references("id")->on("people")->onDelete("cascade")->onUpdate("cascade");
            $table->unsignedBigInteger("nationality_id");
            $table->foreign("nationality_id")->references("id")->on("nationalities")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('person_nationalities');
    }
};
