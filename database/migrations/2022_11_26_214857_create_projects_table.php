<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name');
            $table->string('thumbnail');
            $table->text('description');
            $table->text('github')->nullable();
            $table->text('video')->nullable();
            $table->text('live')->nullable();
            $table->string('techs');
            $table->string('platform');
            $table->unsignedTinyInteger('priority');
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
        Schema::dropIfExists('projects');
    }
}
