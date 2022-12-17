<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name');
            $table->unsignedInteger('level');
            $table->boolean('status')
            ->nullable()
            ->default(1)
            ->comment('0=Not In practice, 1=Practice, 2=New');
            $table->unsignedSmallInteger('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users');
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
        Schema::dropIfExists('skills');
    }
}
