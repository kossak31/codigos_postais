<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConcelhosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('concelhos', function(Blueprint $table)
		{
			$table
				->increments    ('id');
			$table
				->integer       ('distrito_id')
				->unsigned      ()
				->index         ();
			$table
				->integer       ('concelho_id')
				->unsigned      ()
				->index         ();
			$table
				->string        ('name');
			$table
				->timestamps    ();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('concelhos');
	}

}
