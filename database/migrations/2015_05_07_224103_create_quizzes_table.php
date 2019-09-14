<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('quizzes', function($table)
        {
            $table->increments('id');
            $table->string('quiz_name');
            $table->string('choice1', 255);
            $table->string('choice2', 255);
            $table->string('choice3', 255);
            $table->string('answer', 255);

        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('quizzes');
	}

}
