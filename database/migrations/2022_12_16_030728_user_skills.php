<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserSkills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserSkills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userSkillId', 50)->unique();
            $table->string('username', 50)->unique();
            $table->integer('skillID')->unique();
            $table->integer('skillLevelID')->unique();
            $table->date('created_at');
            $table->date('updated_at');
            $table->date('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UserSkills');
    }
}
