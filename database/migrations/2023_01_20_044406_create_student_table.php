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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("serial_number");
            $table->unsignedBigInteger("profile_id");
            $table->unsignedBigInteger("career_id");
            $table->unsignedBigInteger("group_id");

            $table->foreign("profile_id")->references("id")->on("profiles")->onDelete("cascade");
            $table->foreign("career_id")->references("id")->on("careers")->onDelete("cascade");
            $table->foreign("group_id")->references("id")->on("groups")->onDelete("cascade");

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
        Schema::dropIfExists('students');
    }
};
