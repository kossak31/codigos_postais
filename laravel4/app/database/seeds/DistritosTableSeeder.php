<?php

use Carbon\Carbon;

class DistritosTableSeeder extends Seeder {

	public function run()
	{
		DB::table('distritos')->truncate();

		$regs = [
			'Aveiro',
			'Beja',
			'Braga',
			'Bragança',
			'Castelo Branco',
			'Coimbra',
			'Évora',
			'Faro',
			'Guarda',
			'Leiria',
			'Lisboa',
			'Portalegre',
			'Porto',
			'Santarém',
			'Setúbal',
			'Viana do Castelo',
			'Vila Real',
			'Viseu',
			'Ilha da Madeira',
			'Ilha de Porto Santo',
			'Ilha de Santa Maria',
			'Ilha de São Miguel',
			'Ilha Terceira',
			'Ilha da Graciosa',
			'Ilha de São Jorge',
			'Ilha do Pico',
			'Ilha do Faial',
			'Ilha das Flores',
			'Ilha do Corvo',
		];
		foreach ($regs as $reg) {
			Distrito::create(
				[
					'country'    => 184,
				    'name'          => $reg,
				    'created_at'    => Carbon::now(),
				    'updated_at'    => Carbon::now(),
				]
			);
		}
	}

}