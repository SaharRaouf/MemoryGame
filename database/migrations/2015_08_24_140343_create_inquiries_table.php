<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquiriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create('inquiries', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->char('gender');
            $table->integer('birth_date');
            $table->boolean('answer1');
            $table->boolean('answer2');
            $table->boolean('answer3');
            $table->boolean('answer4');
            $table->integer('answer5');
            $table->integer('answer6');
            $table->text('observation');

            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inquiries', function(Blueprint $table)
        {
            Schema::drop('inquiries');
        });
    }

}
