<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('fullname', 50);
            $table->string('nickname', 20);
            $table->date('dob');
            $table->string('phone', 20);
            $table->string('email', 50);
            $table->text('present_addr');
            $table->text('about');
            $table->text('vision');
            $table->string('nationality', 100);
            $table->string('religion', 20);
            $table->string('marital_status', 20);
            $table->text('typed_quotes');
            $table->string('education');
            $table->text('professional_title');
            $table->text('formal_image');
            $table->unsignedSmallInteger('user_id');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
