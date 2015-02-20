<?php

class CodigosPostaisTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('codigos_postais')->truncate();
        
		$n = 1;
		while ($n < 41)
		{
			$this->call('Cp'.$n);
			$n++;
		}
	}
}