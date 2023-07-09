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
        Schema::table('users', function (Blueprint $table) {
            $table->string("pseudo")->unique();
            $table->string("link_twiter")->nullable();
            $table->string("link_linkedin")->nullable();
            $table->string("link_website")->nullable();
            $table->string("github")->nullable();
            $table->string("profile_title")->nullable();
            $table->text("description")->nullable();
            $table->string("photo")->nullable();
            $table->boolean("available")->default(false);
            $table->integer("score")->default(0);
            $table->boolean("is_mentor")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // inverse of up() method
            $table->dropColumn("pseudo");
            $table->dropColumn("link_twiter");
            $table->dropColumn("link_linkedin");
            $table->dropColumn("link_website");
            $table->dropColumn("github");
            $table->dropColumn("profile_title");
            $table->dropColumn("description");
            $table->dropColumn("photo");
            $table->dropColumn("available");
            $table->dropColumn("score");
            $table->dropColumn("is_mentor");
        });
    }
};
