<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title');
            $table->string('passing_year', 30)->nullable();
            $table->string('timeline', 30)->nullable();
            $table->string('grade', 30);
            $table->string('institute');
            $table->text('description');
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
        Schema::dropIfExists('education');
    }
}
