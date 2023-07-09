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
        Schema::create('techno_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('techno_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('techno_id')->references('id')->on('technos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('techno_user');
    }
};
