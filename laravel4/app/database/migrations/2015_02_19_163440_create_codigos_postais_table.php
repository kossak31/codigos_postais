<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCodigosPostaisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('codigos_postais', function(Blueprint $table)
		{
			$table
				->increments('id');
			$table
				->integer('distrito_id')
				->unsigned()
				->index();
			$table
				->integer('concelho_id')
				->unsigned()
				->index();
			$table
				->string('cp', 8)
				->index();
			$table
				->string('localidade', 100);
			$table
				->string('cp_alfa', 30);
				
			// uncomment below if timestamps needed. Remember to set timestamps to true on Model
			/*$table
				->timestamps();*/
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cps');
	}

}
