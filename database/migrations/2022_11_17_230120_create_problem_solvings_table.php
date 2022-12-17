<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemSolvingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problem_solvings', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('platform');
            $table->unsignedInteger('solved');
            $table->text('profile')->nullable();
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
        Schema::dropIfExists('problem_solvings');
    }
}
